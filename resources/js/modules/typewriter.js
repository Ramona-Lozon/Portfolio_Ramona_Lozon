// typewriter.js
// Types out every [data-type] element inside `scope`, one after another, in DOM order.
//
// - Child elements (e.g. <span class="blink">) are preserved: only their text is typed.
// - No layout shift: untyped text keeps its space with visibility: hidden.
// - Screen readers get the full text immediately via a visually hidden copy.
// - Respects prefers-reduced-motion (text just appears).
// - When an element finishes, its original DOM is restored exactly.
//
// Modes:
//   data-type        -> the element's text is typed out character by character
//   data-type="pop"  -> the element (e.g. an icon) stays hidden, then pops in on its turn.
//                       Its contents are never touched, so it's safe on Vue mount targets.
//
// Optional per-element attribute: data-type-pause="600" (ms to wait before it starts).

const wait = (ms) => new Promise((resolve) => setTimeout(resolve, ms));

const reducedMotion = () =>
    window.matchMedia('(prefers-reduced-motion: reduce)').matches;

const isPop = (el) => el.dataset.type === 'pop';

// Pop elements: keep hidden (but taking up space) until their turn.
function preparePop(el) {
    el.classList.add('tw-ready', 'tw-pending');
    return { el, pop: true };
}

async function popElement({ el }) {
    el.classList.remove('tw-pending');
    el.classList.add('tw-pop');
    el.addEventListener('animationend', () => el.classList.remove('tw-pop'), { once: true });
}

// Swap each visible text node for a pair of spans: [typed][rest].
function prepare(el) {
    const srText = document.createElement('span');
    srText.className = 'sr-only';
    srText.textContent = el.textContent.replace(/\s+/g, ' ').trim();

    const walker = document.createTreeWalker(el, NodeFilter.SHOW_TEXT);
    const textNodes = [];
    while (walker.nextNode()) textNodes.push(walker.currentNode);

    const parts = textNodes
        .filter((node) => node.textContent.trim() !== '')
        .map((node) => {
            const typed = document.createElement('span');
            typed.className = 'tw-typed';
            typed.setAttribute('aria-hidden', 'true');

            const rest = document.createElement('span');
            rest.className = 'tw-rest';
            rest.setAttribute('aria-hidden', 'true');
            rest.textContent = node.textContent;

            node.replaceWith(typed, rest);
            return { typed, rest, original: node };
        });

    el.appendChild(srText);
    el.classList.add('tw-ready');
    return { el, parts, srText };
}

// Put the original text nodes back once an element has finished typing.
function restore({ parts, srText }) {
    parts.forEach(({ typed, rest, original }) => {
        typed.replaceWith(original);
        rest.remove();
    });
    srText.remove();
}

async function typeElement(prepared, caret, { speed, jitter }) {
    for (const { typed, rest } of prepared.parts) {
        typed.after(caret);

        while (rest.textContent.length) {
            const char = rest.textContent[0];
            rest.textContent = rest.textContent.slice(1);
            typed.textContent += char;

            // Whitespace is instant so indentation in the markup doesn't cause pauses.
            if (char.trim()) await wait(speed + Math.random() * jitter);
        }
    }

    restore(prepared);
}

export async function typewriter(scope = document, options = {}) {
    const { speed = 15, jitter = 40, pause = 50, popPause = 200, startDelay = 300 } = options;

    const elements = [...scope.querySelectorAll('[data-type]')];
    if (!elements.length) return;

    if (reducedMotion()) {
        elements.forEach((el) => el.classList.add('tw-ready'));
        return;
    }

    // Prepare everything up front so all lines start hidden (with their space reserved).
    const queue = elements.map((el) => (isPop(el) ? preparePop(el) : prepare(el)));

    const caret = document.createElement('span');
    caret.className = 'tw-caret';
    caret.setAttribute('aria-hidden', 'true');

    await wait(startDelay);

    for (const prepared of queue) {
        const defaultPause = prepared.pop ? popPause : pause;
        await wait(Number(prepared.el.dataset.typePause ?? defaultPause));

        if (prepared.pop) await popElement(prepared);
        else await typeElement(prepared, caret, { speed, jitter });
    }

    caret.remove();
}