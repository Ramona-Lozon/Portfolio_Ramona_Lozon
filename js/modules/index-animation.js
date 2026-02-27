export function indexAnimation() {
    const canvas = document.querySelector('#thpace-canvas');

    const settings = {
        colors: ['#880d1e', '#dd2d4a', '#5d7d81'], // your site's colours
        triangleSize: 100,
    };

    ThpaceGL.create(canvas, settings);
}