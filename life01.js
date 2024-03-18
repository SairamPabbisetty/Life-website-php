const quotes = [{
    image: "https://3.bp.blogspot.com/-j4Won5MaPHI/XDnMmER0WrI/AAAAAAAANEg/cADZgOrtw_ovvCBYKN8lY6IGCmMG-NlhACLcBGAs/s1600/Swami%2BVivekananda%2B-%2B2.jpg", 
    quote: "Never say 'No', never say 'I cannot', for you are infinite. All the power is within you. You can do anything.",
    author: "~ Swami Vivekananda."
}, {
    image: "https://th.bing.com/th/id/R.b25f928fe7df27e300e232ee1e7ab710?rik=q6JAl3U%2fuqTg8Q&riu=http%3a%2f%2f1.bp.blogspot.com%2f-Er-5MFqXaCg%2fTeML6yCF-mI%2fAAAAAAAAAAo%2f9tRN7GGdv_I%2fs1600%2fRabindranath-Tagore-Jayan-1792.jpg&ehk=BxNxmVevUnX3Vm6mV7N%2bGqcaJ6ZO7PMZgO9n8aVZmB0%3d&risl=&pid=ImgRaw&r=0",
    quote: "Everything comes to us that belongs to us if we create the capacity to receive it.",
    author: "~ Rabindranath Tagore."
}, {
    image: "https://cdn.quotesgram.com/img/24/94/1523469304-o-MOTHER-TERESA-MYTH-facebook.jpg",
    quote: "Your true character is most accurately meadured by how you treat those who can do 'Nothing' for you.",
    author: "~ Mother Teresa."
}, {
    image: "https://th.bing.com/th/id/OIP.FQEeBw4Fj44nfH6ODVmS9wHaLm?pid=ImgDet&rs=1",
    quote: "If you can't fly then run, if you can't run then walk, if you can't walk then crawl, but whatever you do you have to keep moving forward.",
    author: "~ Martin Luther King, Jr."
}, {
    image: "https://th.bing.com/th/id/OIP.TkXdDuJZGX6SnUg0LNYDJwHaKD?pid=ImgDet&rs=1",
    quote: "You must remember that some things legally right are not morally right.",
    author: "~ Abraham Lincoln."
}]; 

let quotesHTML = "";
const div = document.querySelector('.quotes');

quotes.forEach((quote) => {
    quotesHTML += `
        <div class="quote-div">
            <div class="quote">
                <p><q>${quote.quote}</q>${quote.author}</p>
            </div>
            <div class="author">
                <img src="${quote.image}" alt="Author">
            </div>
        </div>
    `;
});

div.innerHTML = quotesHTML;
