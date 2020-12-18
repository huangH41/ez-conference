import {BASE_URL} from "./apiConfig";

const insert = (str, index, value) => {
    return str.substr(0, index) + value + str.substr(index);
}

export const changePrice = () => {
    let memo = {};
    const rentalDuration = document.getElementById('rental-duration').value;
    const participantLimit = document.getElementById('participant-limit').value;
    if (localStorage.getItem(`${rentalDuration}${participantLimit}`)!=null) {
        document.getElementById('rent-price').innerHTML = localStorage.getItem(`${rentalDuration}${participantLimit}`);
    }
    else {
        fetch(`${BASE_URL}/rent/price?rentalDuration=${rentalDuration}&participantLimit=${participantLimit}`)
            .then((result) => {
                return result.json();
            })
            .then(data => {
                let str = data?.price.toString();
                const len = str.length;
                const mod = len % 3;
                let dividable = len - mod;
                while (dividable > 0){
                    dividable -= 3;
                    if (dividable+mod === 0) continue
                    str = insert(str,dividable+mod,".");
                }
                localStorage.setItem(`${rentalDuration}${participantLimit}`,str);
                document.getElementById('rent-price').innerHTML = str;
            })
            .catch(() => {
                alert('Error, Please Contact Us to report the problem');
            });
    }
}
