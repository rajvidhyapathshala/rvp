
let pcountry = document.querySelector("#pcountry")
let pprovience = document.querySelector("#pprovience")
let pmunicipality = document.querySelector("#pmunicipality")
let pward = document.querySelector("#pward")
let pstreet = document.querySelector("#pstreet")


let tcountry = document.querySelector("#tcountry")
let tprovience = document.querySelector("#tprovience")
let tmunicipality = document.querySelector("#tmunicipality")
let tward = document.querySelector("#tward")
let tstreet = document.querySelector("#tstreet")

let sameaspermanent = document.querySelector("#sameaspermanent")
sameaspermanent.addEventListener('change', () => {
        if (sameaspermanent.checked === true) {
            tcountry.value =pcountry.value;
            tprovience.value = pprovience.value;
            tmunicipality.value = pmunicipality.value;
            tward.value = pward.value;
            tstreet.value = pstreet.value;
        } else if (sameaspermanent.checked === false) {
            tcountry.value = "";
            tprovience.value = "";
            tmunicipality.value = "";
            tward.value = "";
            tstreet.value = "";
        }
    })