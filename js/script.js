//Materialize
$(document).ready(function(){
    $('.sidenav').sidenav({
        draggable: true
    });
    $('.dropdown-trigger').dropdown({
        coverTrigger: false,
    });
    $('.collapsible').collapsible();
    $('.fixed-action-btn').floatingActionButton();
    $('.modal').modal({
        dismissible: false
    });
    $('select').formSelect();
});
//Chart.js
let myChart = document.getElementById('myChart').getContext('2d');
let salesChart = new Chart(myChart,{
    type: 'line',
    data:{
        labels:['January','February','March','April','May','June','July','August','September','October','November','December'],
        datasets:[{
            label: 'Sales',
            data:[
                2000,
                5000,
                3000,
                6000,
                10000,
                12000,
                11000,
                15000,
                20000,
                22000,
                24000,
                25000
            ],
            backgroundColor: '#ec407a',
            hoverBorderWidth: 3,
            hoverBorderColor: '#000'
        }]
    },
    options:{
        title:{
            display:true,
            text: 'Sales Chart', 
            fontSize: 25
        },
        legend:{
            position: 'right'
        }
    }
});


