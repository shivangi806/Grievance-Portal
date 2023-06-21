<head>
<link rel="stylesheet" type="text/css" href="view_grievance.css">
</head>
<?php
session_start();
include 'connection.inc.php';

$country = "SELECT DISTINCT country FROM country_state_city ORDER BY country ASC";
$county_qry = mysqli_query($conn, $country);

include 'include_common/header.php'
?>

<div class="d-flex justify-content-center align-items-center">
    <div class="container my-5">
        <h1 class="text-center my-5">Select location to view grievances</h1>
        <div class="card">
            <div class="card-body">
                
                    <div class="input-group mb-3">
                        <select class="form-select" id="country" name="country">
                            <option selected disabled>Select State</option>
                            <?php while ($row = mysqli_fetch_assoc($county_qry)) : ?>
                                <option value="<?php echo $row['country']; ?>"> <?php echo $row['country']; ?> </option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-select" id="state" name='state'>
                            <option selected disabled>Select District</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-select" id="city" name="city">
                            <option selected disabled>Select Tehsil</option>
                        </select>
                    </div>
                    <form action="submit.php" method="POST">
                    <input type="submit" name="submit" value="Submit"/>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'include_common/footer.php' ?>


<script>
var country_id;
$('#country').on('change', function() {
    country_id= $('#country').find(":selected").text();
    console.log(country_id);
    $.ajax({
        url: 'ajax/state.php',
        type: "POST",
        data:{
            country_id: country_id
        },
        success: function(result) {
            $('#state').html(result);
        }
    })
});
var state_id;
$('#state').on('change', function() {
    state_id= $('#state').find(":selected").text();
    console.log(state_id);
    $.ajax({
        url: 'ajax/city.php',
        type: "POST",
        data: {
            state_data: state_id
        },
        success: function(data) {
            $('#city').html(data);
            console.log(data);
        }
    })
});
$('#city').on('change', function() {
    city_id= $('#city').find(":selected").text();
    console.log(city_id);
    $.ajax({
        url: 'ajax/tehsil.php',
        type: "POST",
        data:{
            city_data: city_id
        },
        success: function(result) {
            $('#output').html(result);
            // console.log(data);
        }
    })
});

// var city_id;
// $('#city').on('change', function() {city_id= $('#city').find(":selected").text();})

// $('#submit').on('click', function(event) {
//     event.preventDefault(); // Prevent the form from submitting normally
//     var city_id = $('#city').find(":selected").text();

//     $.ajax({
//         url: 'submit.php',
//         type: 'POST',
//         data: {
//             city: city_id
//         },
//         success: function(data) {
//             console.log(data);
//             $('#output').html(data);
//         },
//         error: function(jqXHR, textStatus, errorThrown) {
//             console.log(textStatus, errorThrown);
//         }
//     });
// });

</script>
