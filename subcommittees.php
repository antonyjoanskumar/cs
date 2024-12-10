<?php include 'header.php'; ?>

<div class="container my-4"  style="padding: 0;">
    <!--
    <h2 class="text-center text-primary" style="margin-top: 0; margin-bottom: 30px;">Churches</h2>
-->
    <div class="row">
        <!-- Left Column: List of Churches -->
        <div class="col-md-4">
            <h3 class="text-center text-primary mb-4">Churches</h3>
            <div class="list-group">
                <!-- Church Buttons with added border, background color, hover effects -->
                <button class="list-group-item list-group-item-action church-btn" onclick="showChurchDetails('church1')">
                  1. St. Sebastian Church, Madathattuvilai
                </button>
                <button class="list-group-item list-group-item-action church-btn" onclick="showChurchDetails('church2')">
                  2. St. Joseph Church, Appattuvilai
                </button>
                <button class="list-group-item list-group-item-action church-btn" onclick="showChurchDetails('church3')">
                  3. St. Antony Church, Appattuvilai
                </button>
                 <button class="list-group-item list-group-item-action church-btn" onclick="showChurchDetails('church1')">
                  4. St. Sebastian Church, Madathattuvilai
                </button>
                <button class="list-group-item list-group-item-action church-btn" onclick="showChurchDetails('church2')">
                  5. St. Joseph Church, Appattuvilai
                </button>
                <button class="list-group-item list-group-item-action church-btn" onclick="showChurchDetails('church3')">
                  6. St. Antony Church, Appattuvilai
                </button>
                               
                <!-- Add more churches as needed -->
            </div>
        </div>

        <!-- Right Column: Church Details -->
        <div class="col-md-8" id="church-details">
            <h3 class="text-center text-info" id="church-name">Select a Church to See Details</h3>
            <div id="church-info" class="border p-4 rounded bg-light">
                <!-- Church details will be loaded dynamically here -->
                <img src="images/joseph.jpg" width="100%">
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<!-- JavaScript for dynamic content -->
<script>
    // Function to show church details
    function showChurchDetails(church) {
        let name, director, president, vp, secretary, cashier, totalMembers, startedYear;
        
        // Define the church details based on the selected church
        if(church === 'church1') {
            name = "St. Sebastian Church, Madathattuvilai";
            director = "Rev. F. Maria Vincent";
            president = "Mr. Bright Xavier";
            vp = "Mr. Arul Dhas";
            secretary = "Mr. John Justin Raj";
            cashier = "Mrs. Kala";
            totalMembers = "120";
            startedYear = "1985";
        }
        else if(church === 'church2') {
            name = "St. Joseph Church, Appattuvilai";
            director = "Rev. Fr. Xavier Bruce";
            president = "Mr. S. Varuvel";
            vp = "Mr. Anto Claret";
            secretary = "Mrs. Mary Pushpum";
            cashier = "Mr. Albin Rajesh";
            totalMembers = "41";
            startedYear = "2016";
        }
        else if(church === 'church3') {
            name = "St. Antony Church, Appattuvilai";
            director = "Rev. M. Joseph";
            president = "Mr. Thomas George";
            vp = "Mr. Joseph Paul";
            secretary = "Mrs. Rachel Williams";
            cashier = "Mr. Samuel John";
            totalMembers = "100";
            startedYear = "2000";
        }

        // Update the church name
        document.getElementById("church-name").innerText = name;

        // Update the church details dynamically
        document.getElementById("church-info").innerHTML = `
            <p><strong>Director:</strong> ${director}</p>
            <p><strong>President:</strong> ${president}</p>
            <p><strong>Vice President:</strong> ${vp}</p>
            <p><strong>Secretary:</strong> ${secretary}</p>
            <p><strong>Cashier:</strong> ${cashier}</p>
            <p><strong>Total Number of Members:</strong> ${totalMembers}</p>
            <p><strong>Started Year:</strong> ${startedYear}</p>
        `;
    }
</script>

<!-- Custom CSS Styles for Color, Hover, Borders, and Background -->
<style>
    .church-btn {
        border: 2px solid #007bff;
        background-color: #f8f9fa;
        transition: background-color 0.3s, transform 0.3s;
        margin-bottom: 10px;
        border-radius: 5px;
    }

    .church-btn:hover {
        background-color: #0056b3;
        color: #fff;
        transform: scale(1.05);
    }

    #church-details {
        background-color: #f1f1f1;
        border-radius: 10px;
        border: 1px solid #ccc;
    }

    #church-info p {
        font-size: 16px;
        line-height: 1.6;
    }

    #church-name {
        color: #0056b3; /* Blue shade */
        font-size: 24px;
        margin-bottom: 20px;
    }

    .list-group {
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    .list-group-item {
        border-radius: 8px;
        padding: 15px;
        font-size: 18px;
    }

    h2 {
        margin-top: 0; /* Removed the space above the heading */
    }
</style>
