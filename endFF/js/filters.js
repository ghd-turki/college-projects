
//Select all the buttons within the btn_filters_Container 
//and all the goods within the products_container
const filterBtns = document.querySelectorAll(".btn_filters_Container button");
const filterCards = document.querySelectorAll(".products_container .goods");


const filter_Cards = e =>{
    //remove the clicked class from the previous button and add it to the button currently clicked
    document.querySelector(".clicked").classList.remove("active");
    e.target.classList.add("active");

    filterCards.forEach(goods =>{
        //hide all the products
        goods.classList.add("hide");
        //check if the product category equal to the clicked button or if the clicked button is the all button
        //if that is correct then remove the hide
        if(goods.dataset.name === e.target.dataset.name || e.target.dataset.name === "all"){
            goods.classList.remove("hide");
        }
    });
    
}


//Every time the user clicks any of the filter buttons the function filter_Cards is called
filterBtns.forEach(button => button.addEventListener("click",filter_Cards));