//  Funções e Responsividade do SLIDE SLICK
$('.multiple-items').slick({
    arrows: false,
    infinite: true,
    autoplay: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});

// Requisição da API disponivel no repositório do Cassianosch para os cards do slide
fetch('https://raw.githubusercontent.com/Cassianosch/programador.cs-reels/develop/slider-produtos-simples/assets/data/data.json')
    .then(response => response.json())
    .then(data => {
        data.forEach((el) => {
            console.table(el)
            $(".multiple-items").slick("slickAdd", `
                <div class="card items-cente text-center bg-white rounded-xl p-4 m-4 w-full cursor-pointer md:p-2 md:m-2 lg:p-4 lg:m-4">
                    <div class="like w-full h-5 flex justify-end mb-1.5 cursor-pointer">
                        <i class="fa-solid fa-heart text-zinc-300 text-xl hover:text-red-600"></i>
                    </div>
                    <img class="product w-full" src="${el.image}" alt="Foto do produto - ${el.name}">
                    <h4 class="text-zinc-600 text-md font-light my-2" title="${el.name}">${el.name}</h4>
                    <div class="rating text-yellow-500">
                        ${handleRating(el.rating)}
                    </div>
                    <div class="price flex justify-center gap-2.5 my-2">
                        <h5 class="line-through font-light text-zinc-500 text-sm">${handlePrice(el.price)}</h5>
                        <h5 class="font-semibold text-zinc-500 text-xl">${handlePrice(el.price, true)}</h5>
                    </div>
                    <a class="text-indigo-400 text-center border-2 border-indigo-400 rounded-2xl my-0.5 p-2 duration-200 hover:text-white hover:bg-indigo-400"
                        href="#">Adicionar ao carrinho
                    </a>
                </div>
            `);
        });
    });

//Função para chamar a quantidade de estrelas da API
function handleRating(rating) {
    let htmlToReturn = ""
        const maximumRatingStars = 5
        for (let i = 0; i < rating; i++) {
            htmlToReturn = htmlToReturn + '&#9733;'
        }
        for (let i = 0; i < maximumRatingStars - rating; i++) {
            htmlToReturn = htmlToReturn + '&#9734;'
        }
    return htmlToReturn;
}

//Função para chamar o preço com desconto da API
function handlePrice(price, discount = false) {
    if (discount) {
        price = price * 0.9;
    }
    return price.toLocaleString('pt-BR', {
        style: 'currency',
        currency: 'BRL',
    })
}
