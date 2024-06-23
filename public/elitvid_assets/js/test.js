// const test = document.getElementById('image')

// let img = '/1180x592.png';

// let newsrc = test.getAttribute('src')+img

// test.setAttribute('src', newsrc)
// console.log(test)


document.addEventListener('DOMContentLoaded', () => {
    const vaseImage = document.getElementById('image');
    const firstImage = document.getElementById('first_image');
    vaseImage.style.display = 'none';
    let currentTexture = 'мрамор';
    let currentColor = 'графит';

    const textures = document.querySelectorAll('.images_textures__images img');
    const colors = document.querySelectorAll('.images_colors__images div');

    textures.forEach(img => {
        img.addEventListener('click', () => {
            firstImage.style.display = 'none';
            vaseImage.style.display = 'block';
            currentTexture = img.getAttribute('data-texture');
            updateImage();
        });
    });

    colors.forEach(div => {
        div.addEventListener('click', () => {
            firstImage.style.display = 'none';
            vaseImage.style.display = 'block';
            currentColor = div.getAttribute('data-color');
            updateImage();
        });
    });

    const src = vaseImage.getAttribute('src');
    function updateImage() {

        let img = '%20'+currentTexture+'%20'+currentColor+'.png'

        let newsrc =src+img;
        console.log(newsrc)
        // vaseImage.src = `http://localhost:8080/elitvid_assets/newDesign/newDesign/imgs/pots/forms/test/AMPHORA%20${currentTexture}%20${currentColor}.png`;
        vaseImage.src = newsrc;
        // vaseImage.setAttribute('src', newsrc);
    }
});
