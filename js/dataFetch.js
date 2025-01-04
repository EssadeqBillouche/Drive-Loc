// Store fetched data
let allDataFetched = [];

// Fetch data from the server
fetch("classes/data.php").then(respon => respon.json()).then(data => {
    allDataFetched =data;
    displayAllData();

})

function displayAllData() {
    const container = document.querySelector("#containerCar");
    container.innerHTML = ''; // Clear existing content

    allDataFetched.forEach(car => {
        container.innerHTML += `
            <div class="Card_Card_ col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    <img class="img-fluid mb-4" src="${car.car_image}" alt="${car.name}">
                    <h4 class="text-uppercase mb-4">${car.car_brand}</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>${car.model}</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>${car.GearBox}</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span>${car.mileage}</span>
                        </div>
                    </div>
                    <a class="btn btn-primary px-3" href="DetailsAndBooking.php?id=${car.car_id}">Details And Booking</a>
                </div>
            </div>`;
    });
}

// Initialize the page
displayAllData();