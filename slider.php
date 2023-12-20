<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,200,1,200" />
    <title>Auto-Swipe Review Section</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            height: 2000px;
        }
        #reviews-container {
            max-width: 600px;
            margin: 0 auto;
            overflow: hidden;
            border: 1px solid red;
        }
        #reviews-list {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        .review {
            flex: 0 0 auto;
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #ccc;
            padding: 10px;
            margin-right: 10px;
        }

        
        #counter-container {
            height: 10vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2em;
            color: #333;
            border: 1px solid red
        }
        .counter {
            margin: 10px;
        }
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 1,
  'wght' 200,
  'GRAD' 200,
  'opsz' 40
}

.animanate {
    border: 1px solid green;
    width: 100%;
    /* height: 150vh; */
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    margin-top: 10%;
}
.animanate div {
    width: 80px;
    padding: 100px;
    border: 1px solid red;
    margin-top: 5%;
}
.form_container {
  width: fit-content;
  height: fit-content;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 15px;
  padding: 50px 40px 20px 40px;
  background-color: #ffffff;
  box-shadow: 0px 106px 42px rgba(0, 0, 0, 0.01),
    0px 59px 36px rgba(0, 0, 0, 0.05), 0px 26px 26px rgba(0, 0, 0, 0.09),
    0px 7px 15px rgba(0, 0, 0, 0.1), 0px 0px 0px rgba(0, 0, 0, 0.1);
  border-radius: 11px;
  font-family: "Inter", sans-serif;
}

.logo_container {
  box-sizing: border-box;
  width: 80px;
  height: 80px;
  background: linear-gradient(180deg, rgba(248, 248, 248, 0) 50%, #F8F8F888 100%);
  border: 1px solid #F7F7F8;
  filter: drop-shadow(0px 0.5px 0.5px #EFEFEF) drop-shadow(0px 1px 0.5px rgba(239, 239, 239, 0.5));
  border-radius: 11px;
}

.title_container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 10px;
}

.title {
  margin: 0;
  font-size: 1.25rem;
  font-weight: 700;
  color: #212121;
}

.subtitle {
  font-size: 0.725rem;
  max-width: 80%;
  text-align: center;
  line-height: 1.1rem;
  color: #8B8E98
}

.input_container {
  width: 100%;
  height: fit-content;
  position: relative;
  display: flex;
  flex-direction: column;
  gap: 5px;
}

.icon {
  width: 20px;
  position: absolute;
  z-index: 99;
  left: 12px;
  bottom: 9px;
}

.input_label {
  font-size: 0.75rem;
  color: #8B8E98;
  font-weight: 600;
}

.input_field {
  width: auto;
  height: 40px;
  padding: 0 0 0 40px;
  border-radius: 7px;
  outline: none;
  border: 1px solid #e5e5e5;
  filter: drop-shadow(0px 1px 0px #efefef)
    drop-shadow(0px 1px 0.5px rgba(239, 239, 239, 0.5));
  transition: all 0.3s cubic-bezier(0.15, 0.83, 0.66, 1);
}

.input_field:focus {
  border: 1px solid transparent;
  box-shadow: 0px 0px 0px 2px #242424;
  background-color: transparent;
}

.sign-in_btn {
  width: 100%;
  height: 40px;
  border: 0;
  background: #115DFC;
  border-radius: 7px;
  outline: none;
  color: #ffffff;
  cursor: pointer;
}

.sign-in_ggl {
  width: 100%;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  background: #ffffff;
  border-radius: 7px;
  outline: none;
  color: #242424;
  border: 1px solid #e5e5e5;
  filter: drop-shadow(0px 1px 0px #efefef)
    drop-shadow(0px 1px 0.5px rgba(239, 239, 239, 0.5));
  cursor: pointer;
}

.sign-in_apl {
  width: 100%;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  background: #212121;
  border-radius: 7px;
  outline: none;
  color: #ffffff;
  border: 1px solid #e5e5e5;
  filter: drop-shadow(0px 1px 0px #efefef)
    drop-shadow(0px 1px 0.5px rgba(239, 239, 239, 0.5));
  cursor: pointer;
}

.separator {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 30px;
  color: #8B8E98;
}

.separator .line {
  display: block;
  width: 100%;
  height: 1px;
  border: 0;
  background-color: #e8e8e8;
}

.note {
  font-size: 0.75rem;
  color: #8B8E98;
  text-decoration: underline;
}
    </style>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <div class="space">
        <h2>Reviews from our traders</h2>
    </div>
    <div id="reviews-container">
        <div id="reviews-list">
            <!-- Predefined Reviews -->

            <div class="review">
                <strong>John Doe</strong>
                <br>Rating: 4/5 f84e
                <span class="material-symbols-outlined">
finance_chip
</span>
                <p>Great product! I love it.</p>
            </div>

            <div class="review">
                <strong>Jane Smith</strong>
                <br>Rating: 5/5
                <br>
                <span class="material-symbols-outlined">
                    star_rate_half
                </span>
                <span class="material-symbols-outlined">
star_rate
</span>
<span class="material-symbols-outlined">
star_rate_half
</span>
<span class="material-symbols-outlined">
star_rate
</span>
                <p>Excellent service and fast delivery Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic laudantium itaque quam architecto doloribus id saepe rerum eveniet accusamus odio alias praesentium ea veritatis vel officia expedita, amet nostrum optio?.</p>
            </div>
            

            <div class="review">
                <strong>henry Smith</strong>
                <br>Rating: 5/5
                <span class="material-symbols-outlined">
                    person_add
                </span>
<span class="material-symbols-outlined">
payments
</span>
<span class="material-symbols-outlined">
monitoring
</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero illum amet beatae porro velit in laborum pariatur, facilis natus corrupti maxime. Unde cumque praesentium exercitationem non earum reprehenderit vel nobis!y.</p>
            </div>
            

            <!-- Add more reviews as needed -->
        </div>
    </div>

    <script>
        var currentIndex = 0;

        function updateCarousel() {
            var reviewsList = document.getElementById('reviews-list');
            var reviews = document.querySelectorAll('.review');
            var reviewWidth = reviews[0].offsetWidth;

            // Move to the next review
            currentIndex = (currentIndex + 1) % reviews.length;

            // Calculate the transform value to show the next review
            var transformValue = -currentIndex * reviewWidth + 'px';

            // Apply the transform to the reviews list
            reviewsList.style.transform = `translateX(${transformValue})`;
        }

        // Automatically update the carousel every 5 seconds
        setInterval(updateCarousel, 5000);
    </script>
    
    <div id="counter-container">
        <!-- <p id="counter">0</p> -->
        <p class="counter" id="counter1">0</p>
        <p class="counter" id="counter2">0</p>
        <p class="counter" id="counter3">0</p>
    </div>
    <script>
        // Set the target element
        var targetElement = document.getElementById('counter-container');
        
        // Set the counter limits
        var counterLimits = [100, 200, 300];

        // Set the initial counts
        var currentCounts = [0, 0, 0];

        // Create an Intersection Observer
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    // Start counting when the target is in the viewport
                    startCounting();
                    // Unobserve the target to stop counting once completed
                    observer.unobserve(entry.target);
                }
            });
        });

        // Observe the target element
        observer.observe(targetElement);

        function startCounting() {
            var counters = document.querySelectorAll('.counter');

            counters.forEach(function(counter, index) {
                var interval = setInterval(function() {
                    currentCounts[index]++;
                    counter.textContent = currentCounts[index];

                    if (currentCounts[index] === counterLimits[index]) {
                        clearInterval(interval);
                    }
                }, 50);
            });
        }
    
    </script>

<div class="animanate">
<div data-aos="fade-left"
     data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="500">
</div>


<div data-aos="fade-up"
     data-aos-duration="3000">
</div>
<div data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
</div>
<div data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
</div>

<div data-aos="zoom-out-left"></div>

</div>


<script>
  AOS.init();
</script>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country and State Selector</title>
    <style>
        /* Your CSS styles go here */
    </style>
</head>
<body>

    <div id="mapSection">
        <!-- Country Selector -->
        <label for="countries">Select Country:</label>
        <select id="countries" onchange="updateStatesAndMap()">
            <option value="usa">USA</option>
            <option value="canada">Canada</option>
            <option value="uk">UK</option>
        </select>

        <!-- State Selector -->
        <label for="states">Select State:</label>
        <select id="states"></select>
    </div>

    <div id="maps">
        <!-- Your map content goes here -->
        <div id="usaMap" class="map" style="display:none;">Map for USA</div>
        <div id="canadaMap" class="map" style="display:none;">Map for Canada</div>
        <div id="ukMap" class="map" style="display:none;">Map for UK</div>
    </div>

    <script>
        function updateStatesAndMap() {
            // Get the selected country
            var selectedCountry = document.getElementById('countries').value;

            // Get the states dropdown and maps div
            var statesDropdown = document.getElementById('states');
            var mapsDiv = document.getElementById('maps');

            // Clear the current states dropdown and hide all maps
            statesDropdown.innerHTML = '';
            var maps = document.querySelectorAll('.map');
            maps.forEach(map => {
                map.style.display = 'none';
            });

            // Update states and show the corresponding map
            switch (selectedCountry) {
                case 'usa':
                    addStates(['New York', 'California', 'Texas']);
                    showMap('usaMap');
                    break;
                case 'canada':
                    addStates(['Ontario', 'Quebec', 'British Columbia']);
                    showMap('canadaMap');
                    break;
                case 'uk':
                    addStates(['England', 'Scotland', 'Wales']);
                    showMap('ukMap');
                    break;
                default:
                    // Handle other cases if needed
                    break;
            }
        }

        function addStates(states) {
            var statesDropdown = document.getElementById('states');
            states.forEach(state => {
                var option = document.createElement('option');
                option.value = state.toLowerCase();
                option.textContent = state;
                statesDropdown.appendChild(option);
            });
        }

        function showMap(mapId) {
            var map = document.getElementById(mapId);
            if (map) {
                map.style.display = 'block';
            }
        }
    </script>

</body>
</html>
