import { Chart } from "chart.js/auto";



/* const labels = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
];


const data = {
    labels: labels,
    datasets: [{
        label: 'My First dataset',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: [0, 10, 5, 2, 20, 30, 45],
    }]
};


const config = {
    type: 'line',
    data: data,
    options: {}
};

new Chart(
    document.getElementById('myChart'),
    config
); */

import axios from "axios";
const labels = [
    'Annuel',
    'Mensuel',
];

const datas = axios.get('http://127.0.0.1:8000/abonnements')
                   .then(ab => console.log(ab.data.total_annuel))

//console.log(datas)


 const data = {
    labels: labels,
    datasets: [{
        label: 'Abonnement clients',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: [0, 10, 5, 2, 20, 30, 45],
    }]
}; 