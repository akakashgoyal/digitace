<?php
include('./db-conn.php');


// add category section

if (isset($_POST['add-categories'])) {
    $cate_id =mt_rand(11111,99999);
    $cate_name=$_POST['cate_name'];
    $meta_title=$_POST['meta_title'];
    $meta_key=$_POST['meta_key'];
    $meta_desc=$_POST['meta_desc'];
    $added_on=date('M D,Y');
    $slug_url=SlugUrl($cate_name);
      

    $sql="INSERT INTO digitace_category(cate_id,cate_name,meta_title,meta_desc,meta_key,slug_url,added_on	
   )VALUES('$cate_id','$cate_name','$meta_title','$meta_desc','$meta_key','$slug_url','$added_on')";
   
   $check = mysqli_query($conn,$sql);
   if ($check) {
   ?>
    <script type="text/javascript">
        alert('Inserted Successfully');
        window.location.href="view-categories.php";

    </script>
   <?php
   }
   else {
    echo"not inserted";
   }
}
?>
<?php
// add category section end


// ---add-sub-categories----------
if (isset($_POST['add-sub-categories'])) {
    $cate_id = mt_rand(11111, 99999);
    $parent_id = $_POST['parent_id'];
    $sub_service_title = $_POST['sub_service_title'];
    $first_heading = $_POST['first_heading'];
    $first_description = $_POST['first_description'];
    $second_heading = $_POST['second_heading'];
    $second_description = $_POST['second_description'];
    $third_description = $_POST['third_description'];
    $first_question = $_POST['first_question'];
    $first_answer = $_POST['first_answer'];
    $second_question = $_POST['second_question'];
    $second_answer = $_POST['second_answer'];
    $third_question = $_POST['third_question'];
    $third_answer = $_POST['third_answer'];
    $fourth_question = $_POST['fourth_question'];
    $fourth_answer = $_POST['fourth_answer'];
    $fifth_question = $_POST['fifth_question'];
    $fifth_answer = $_POST['fifth_answer'];
    $added_on = date('M D,Y');

    // Handle file uploads
    $model_image1 = $_FILES['model_image1']['name'];
    $model_image2 = $_FILES['model_image2']['name'];
    
    $target_dir = "uploads/";
    $target_file1 = $target_dir . basename($_FILES["model_image1"]["name"]);
    $target_file2 = $target_dir . basename($_FILES["model_image2"]["name"]);

    move_uploaded_file($_FILES["model_image1"]["tmp_name"], $target_file1);
    move_uploaded_file($_FILES["model_image2"]["tmp_name"], $target_file2);

    $sql = "INSERT INTO digitace_sub_category(
        cate_id, parent_id, sub_service_title, model_image1, model_image2, first_heading, 
        first_description, second_heading, second_description, third_description, 
        first_question, first_answer, second_question, second_answer, third_question, 
        third_answer, fourth_question, fourth_answer, fifth_question, fifth_answer, added_on
    ) VALUES (
        '$cate_id', '$parent_id', '$sub_service_title', '$model_image1', '$model_image2', 
        '$first_heading', '$first_description', '$second_heading', '$second_description', 
        '$third_description', '$first_question', '$first_answer', '$second_question', 
        '$second_answer', '$third_question', '$third_answer', '$fourth_question', 
        '$fourth_answer', '$fifth_question', '$fifth_answer', '$added_on'
    )";

    $check = mysqli_query($conn, $sql);

    if ($check) {
        echo "<script type='text/javascript'>
            alert('Inserted Successfully');
            window.location.href='view-sub-categories.php';
        </script>";
    } else {
        echo "not inserted";
    }
}



// add sub-category section end


// ---add-model----------

if (isset($_POST['add-model'])) {
    $model_id = mt_rand(11111, 99999);
    $model_name = $_POST['pro_name'];
    $model_cate = $_POST['pro_cate'];
    $model_sub_cate = $_POST['pro_sub_cate'];
    $tagline = $_POST['tagline'];

    // product Image code
    if (isset($_FILES['model_image1'])) {
        $filename1 = $_FILES['model_image1']['name'];
        $tempname1 = $_FILES['model_image1']['tmp_name'];
        $destination1 = 'assets/img/uploads/' . $filename1;
        move_uploaded_file($tempname1, $destination1);
    } else {
        echo "<script>alert('Image is not uploaded');</script>";
    }
     if (isset($_FILES['model_image2'])) {
        $filename2 = $_FILES['model_image2']['name'];
        $tempname2 = $_FILES['model_image2']['tmp_name'];
        $destination2 = 'assets/img/uploads/' . $filename2;
        move_uploaded_file($tempname2, $destination2);
    } else {
        echo "<script>alert('Image is not uploaded');</script>";
    }
     if (isset($_FILES['model_image3'])) {
        $filename3 = $_FILES['model_image3']['name'];
        $tempname3 = $_FILES['model_image3']['tmp_name'];
        $destination3 = 'assets/img/uploads/' . $filename3;
        move_uploaded_file($tempname3, $destination3);
    } else {
        echo "<script>alert('Image is not uploaded');</script>";
    }
     if (isset($_FILES['model_image4'])) {
        $filename4 = $_FILES['model_image4']['name'];
        $tempname4 = $_FILES['model_image4']['tmp_name'];
        $destination4 = 'assets/img/uploads/' . $filename4;
        move_uploaded_file($tempname4, $destination4);
    } else {
        echo "<script>alert('Image is not uploaded');</script>";
    }
     if (isset($_FILES['model_image5'])) {
        $filename5 = $_FILES['model_image5']['name'];
        $tempname5 = $_FILES['model_image5']['tmp_name'];
        $destination5 = 'assets/img/uploads/' . $filename5;
        move_uploaded_file($tempname5, $destination5);
    } else {
        echo "<script>alert('Image is not uploaded');</script>";
    }

    $motor_type = $_POST['motor_type'];
    $motor_power = $_POST['motor_power'];
    $voltage = $_POST['voltage'];
    $front_break = $_POST['front_break'];
    $rear_break = $_POST['rear_break'];
    $suspension = $_POST['suspension'];
    $wheel_type = $_POST['wheel_type'];
    $wheel_size = $_POST['wheel_size'];
    $charger = $_POST['charger'];
    $model_desc = $_POST['model_desc'];
    $slug_url = SlugUrl($model_name);
    $added_on = date('M D,Y');
   

    // Prepared statement to prevent SQL injection
$sql = "INSERT INTO nxte_models(model_id, model_name, model_cate, model_sub_cate, tagline, model_image1,model_image2,model_image3,model_image4,model_image5, motor_type, motor_power, voltage, front_break, rear_break, suspension, wheel_type, wheel_size, charger, model_desc, slug_url, added_on) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Update the type definition string to match the number of placeholders
$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "isssssssssssssssssssss",
    $model_id, $model_name, $model_cate, $model_sub_cate, $tagline, $destination1,$destination2,$destination3,$destination4,$destination5, $motor_type,
    $motor_power, $voltage, $front_break, $rear_break, $suspension, $wheel_type, $wheel_size, $charger, $model_desc, $slug_url, $added_on
);

// Check if statement preparation was successful
if ($stmt === false) {
    die('Prepare failed: ' . htmlspecialchars($conn->error));
}

// Execute the statement
if ($stmt->execute()) {
    ?>
    <script type="text/javascript">
        alert('Inserted Successfully');
        window.location.href = "view-models.php";
    </script>
    <?php
} else {
    echo "Not inserted: " . htmlspecialchars($stmt->error);
}
}

// add product section end



// add blog




if (isset($_POST['add-blog'])) {
    $blog_id = mt_rand(11111, 99999);
    $blog_title = $_POST['blog_title'];
    $author_name = $_POST['author_name'];
    $short_description = $_POST['short_description'];
    $description = $_POST['description'];
    
    // File upload handling
    if (isset($_FILES['blog_image'])) {
        $filename = $_FILES['blog_image']['name'];
        $tempname = $_FILES['blog_image']['tmp_name'];
        $destination = 'assets/img/blogImages/' . $filename;
        move_uploaded_file($tempname, $destination);
    } else {
        echo "<script>alert('Image is not uploaded');</script>";
        exit; // Stop further execution if image upload fails
    }

    $added_on = date('Y-m-d H:i:s'); // Use a standard date format for database

    // Prepared statement to prevent SQL injection
    $sql = "INSERT INTO digitace_blog(blog_id, blog_title, author_name, short_description, description, blog_image, added_on) VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    // Initialize prepared statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("issssss", $blog_id, $blog_title, $author_name, $short_description, $description, $destination, $added_on);

    // Execute the statement
    if ($stmt->execute()) {
        ?>
        <script type="text/javascript">
            alert('Blog Inserted Successfully');
            window.location.href = "view-blog.php";
        </script>
        <?php
    } else {
        echo "Error: " . htmlspecialchars($stmt->error);
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}



// subscribe signup mail section

if (isset($_POST['subscribe_signup_btn'])) {
    $subscribe_email=$_POST['subscribe_email'];
    $sql="INSERT INTO nxte_subscribe(user_emails)VALUES('$subscribe_email')";
   
   $check = mysqli_query($conn,$sql);
   if ($check) {
   ?>
    <script type="text/javascript">
        alert('Inserted Successfully');
        window.location.href="../index.php";

    </script>
   <?php
   }
   else {
    echo"not inserted";
   }
}

// view section start below
// This function retrieves categories from the database and outputs them in a table format.
function get_categories(){
    include('db-conn.php');
    $sql="SELECT * FROM digitace_category ORDER BY id DESC";
     $check = mysqli_query($conn,$sql);
     $sno=1;
     while ($result=mysqli_fetch_assoc($check))
     {
      echo $output="<tr>
        <td>".$sno++."</td>
       <td>".$result['cate_id']."</td>
       <td>".$result['cate_name']."</td>
       <td>".$result['slug_url']."</td>
       <td>".$result['added_on']."</td>
       </tr>";
     }  
     
}
//get category function end 

// This function retrieves sub-categories from the database and outputs them in a tabular format.
function get_sub_categories(){
    include('db-conn.php');
    $sql = "SELECT * FROM digitace_sub_category ORDER BY cate_id DESC";
    $check = mysqli_query($conn, $sql);
    $sno = 1;
    while ($result = mysqli_fetch_assoc($check)) {
        $parent_id = $result['parent_id'];
        $sql2 = "SELECT cate_name FROM digitace_category WHERE cate_id = $parent_id";
        $check2 = mysqli_query($conn, $sql2);
        $parent = mysqli_fetch_assoc($check2);

        echo "<tr>
            <td>".$sno++."</td>
            <td>".$result['cate_id']."</td>
            <td>".$result['sub_service_title']."</td>
            <td>".ucwords($parent['cate_name'])."</td>
            <td>".$result['model_image1']."</td>
            <td>".$result['first_heading']."</td>
            <td>".$result['first_description']."</td>
            <td>".$result['model_image2']."</td>
            <td>".$result['second_heading']."</td>
            <td>".$result['second_description']."</td>
            <td>".$result['third_description']."</td>
            <td>".$result['first_question']."</td>
            <td>".$result['first_answer']."</td>
            <td>".$result['second_question']."</td>
            <td>".$result['second_answer']."</td>
            <td>".$result['third_question']."</td>
            <td>".$result['third_answer']."</td>
            <td>".$result['fourth_question']."</td>
            <td>".$result['fourth_answer']."</td>
            <td>".$result['fifth_question']."</td>
            <td>".$result['fifth_answer']."</td>
            <td>".$result['slug_url']."</td>
            <td>".$result['added_on']."</td>
        </tr>";
    }
}


// get sub-category function end



// view models function start
function get_models(){
    include('db-conn.php');
    $sql="SELECT * FROM nxte_models ORDER BY id DESC";
     $check = mysqli_query($conn,$sql);
     $sno=1;
     
     while ($result=mysqli_fetch_assoc($check))
     {
      
      echo $output="<tr>
        <td>".$sno++."</td>
        <td><a href='view-models.php?model_id=".$result['model_id']."'>Delete</a></td>
        <td>".$result['model_id']."</td>
        <td>".$result['model_name']."</td>
        <td>".$result['tagline']."</td>
        <td>".$result['model_image1']."</td>
        <td>".$result['model_image2']."</td>
        <td>".$result['model_image3']."</td>
        <td>".$result['model_image4']."</td>
        <td>".$result['model_image5']."</td>
        <td>".$result['motor_type']."</td>
        <td>".$result['motor_power']."</td>
        <td>".$result['voltage']."</td>
        <td>".$result['front_break']."</td>
        <td>".$result['rear_break']."</td>
        <td>".$result['suspension']."</td>
        <td>".$result['wheel_type']."</td>
        <td>".$result['wheel_size']."</td>
        <td>".$result['charger']."</td>
        <td>".$result['model_desc']."</td>
        <td>".$result['slug_url']."</td>
        <td>".$result['added_on']."</td>
       </tr>";
     }  
     
}


// Display subcategories based on the selected parent category.
// this function is used in add product page to show sub category on the basis of parent category
if (isset($_POST['cate_id'])) {
  $p_id=$_POST['cate_id'];

    $sql="SELECT * FROM digitace_sub_category WHERE parent_id=$p_id ORDER BY id DESC";
     $check = mysqli_query($conn,$sql);
     ?>
     <option value="">select</option>
     <?php
    while ($result=mysqli_fetch_assoc($check)) {
        echo "<option value=".$result['cate_id'].">".$result['cate_name']."</option>";
     
    }
     
}
// displayed subcategory function end 


// This function converts a string into a URL-friendly slug format.
function SlugUrl($string)
{
    $slug=preg_replace('/[^a-zA-Z0-9 -]/','',$string);
    $slug= str_replace(' ','-', $slug);
    $slug=strtolower($slug);
    return $slug;
}
// slug url function end

// logout section start
if (isset($_POST["logout"])) {
    # code...
    session_destroy();
    header("location:index.php");
}

// View Post or get post

// view blogs /show blogs function start
function get_blogs(){
    include('db-conn.php');
    $sql="SELECT * FROM digitace_blog ORDER BY id DESC";
     $check = mysqli_query($conn,$sql);
     $sno=1;
     
     while ($result=mysqli_fetch_assoc($check))
     {
      
      echo $output="<tr>
        <td>".$sno++."</td>
        <td>".$result['blog_id']."</td>
        <td>".$result['blog_title']."</td>
        <td>".$result['author_name']."</td>
        <td>".$result['short_description']."</td>
        <td>".$result['description']."</td>
        <td>".$result['blog_image']."</td>
        <td>".$result['added_on']."</td>
        <td><a href='view-blog.php?blog_id=".$result['blog_id']."'>Delete</a></td>
       </tr>";
     }  
     
}

// view Subscribers function start
function get_subscribers(){
    include('db-conn.php');
    $sql="SELECT * FROM nxte_subscribe ORDER BY id DESC";
     $check = mysqli_query($conn,$sql);
     $sno=1;
     
     while ($result=mysqli_fetch_assoc($check))
     {
      
      echo $output="<tr>
        <td>".$sno++."</td>
        <td>".$result['user_emails']."</td>
       </tr>";
     }  
     
}
?>


 




<?php
if (isset($_POST["enquiry_submit"])){
    $customer_name= $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];
    $customer_number = $_POST['customer_number'];
    $website = $_POST['website'];
    $customer_message = $_POST['customer_message'];
    $sql="INSERT INTO digitace_enquiry(customer_name,customer_email,customer_number,customer_address,customer_message)VALUES('$customer_name','$customer_email','$customer_number',' $customer_address','$customer_message'   )";
   $check = mysqli_query($conn,$sql);
   if ($check) {
   ?>
    <script type="text/javascript">
        alert('Inserted Successfully');
        window.location.href="../contact.php";

    </script>
   <?php
   }
   else {
    echo"not inserted";
   }

}


// get contact form / get enquiy form
function get_enquiry(){
    include('db-conn.php');
    $sql="SELECT * FROM digitace_enquiry ORDER BY id DESC";
     $check = mysqli_query($conn,$sql);
     $sno=1;
     while ($result=mysqli_fetch_assoc($check))
     {
      echo $output="<tr>
        <td>".$sno++."</td>
       <td>".$result['customer_name']."</td>
       <td>".$result['customer_email']."</td>
       <td>".$result['customer_number']."</td>
       <td>".$result['website']."</td>
       <td>".$result['customer_message']."</td>
       </tr>";
     }  
     
}

// Become Dealer form  Get

if (isset($_POST["become_dealer"])){
    $customer_name= $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];
    $customer_number = $_POST['customer_number'];
    $customer_bussiness = $_POST['customer_bussiness'];
    $customer_investment = $_POST['customer_investment'];
    $customer_experience = $_POST['customer_experience'];
    $customer_turnover = $_POST['customer_turnover'];
    $customer_country = $_POST['customer_country'];
    $customer_state = $_POST['customer_state'];
    $customer_city = $_POST['customer_city'];
    $sql="INSERT INTO nxte_becomedealer(customer_name,customer_email,customer_number,customer_bussiness,customer_investment,customer_experience,customer_turnover,customer_country,customer_state,customer_city)VALUES('$customer_name','$customer_email','$customer_number',' $customer_bussiness','$customer_investment','$customer_experience','$customer_turnover','$customer_country','$customer_state','$customer_city')";
   $check = mysqli_query($conn,$sql);
   if ($check) {
   ?>
    <script type="text/javascript">
        alert('Thank you for Contacting us');
        window.location.href="../becomedealer.php";

    </script>
   <?php
   }
   else {
    echo"not inserted";
   }
}
// get becomedealer form / get becomedealer form
function get_becomedealer(){
    include('db-conn.php');
    $sql="SELECT * FROM nxte_becomedealer ORDER BY id DESC";
     $check = mysqli_query($conn,$sql);
     $sno=1;
     while ($result=mysqli_fetch_assoc($check))
     {
      echo $output="<tr>
        <td>".$sno++."</td>
       <td>".$result['customer_name']."</td>
       <td>".$result['customer_email']."</td>
       <td>".$result['customer_number']."</td>
       <td>".$result['customer_bussiness']."</td>
       <td>".$result['customer_investment']."</td>
       <td>".$result['customer_experience']."</td>
       <td>".$result['customer_turnover']."</td>
       <td>".$result['customer_country']."</td>
       <td>".$result['customer_state']."</td>
       <td>".$result['customer_city']."</td>
       </tr>";
     }  
     
}

// Test Drive form  Get

if (isset($_POST["testdrive"])){
    $customer_name= $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];
    $customer_number = $_POST['customer_number'];
    $customer_type = $_POST['customer_type'];
    $customer_category = $_POST['customer_category'];
    $customer_model = $_POST['customer_model'];
    $customer_country = $_POST['customer_country'];
    $customer_state = $_POST['customer_state'];
    $customer_city = $_POST['customer_city'];
    $customer_message = $_POST['customer_message'];
     $sql = "INSERT INTO nxte_testdrive (customer_name, customer_email, customer_number, customer_type, customer_category, customer_model, customer_country, customer_state, customer_city, customer_message)VALUES ('$customer_name', '$customer_email', '$customer_number', '$customer_type', '$customer_category', '$customer_model', '$customer_country', '$customer_state', '$customer_city', '$customer_message')";

   $check = mysqli_query($conn,$sql);
   if ($check) {
   ?>
    <script type="text/javascript">
        alert('Thank you for Contacting us');
        window.location.href="../testdrive.php";

    </script>
   <?php
   }
   else {
    echo"not inserted";
   }
}


// get testdrive form / get testdrive form
function get_testdrive(){
    include('db-conn.php');
    $sql="SELECT * FROM nxte_testdrive ORDER BY id DESC";
     $check = mysqli_query($conn,$sql);
     $sno=1;
     while ($result=mysqli_fetch_assoc($check))
     {
      echo $output="<tr>
        <td>".$sno++."</td>
       <td>".$result['customer_name']."</td>
       <td>".$result['customer_email']."</td>
       <td>".$result['customer_number']."</td>
       <td>".$result['customer_type']."</td>
       <td>".$result['customer_category']."</td>
       <td>".$result['customer_model']."</td>
       <td>".$result['customer_country']."</td>
       <td>".$result['customer_state']."</td>
       <td>".$result['customer_city']."</td>
       <td>".$result['customer_message']."</td>
       </tr>";
     }  
     
}


// Catologue form  Get

if (isset($_POST["catalogue"])){
    $customer_name= $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];
    $customer_number = $_POST['customer_number'];
    $customer_type = $_POST['customer_type'];
    $customer_country = $_POST['customer_country'];
    $customer_state = $_POST['customer_state'];
    $customer_city = $_POST['customer_city'];
     $sql = "INSERT INTO nxte_catalogue_enquiry (customer_name, customer_email, customer_number, customer_type, customer_country, customer_state, customer_city )
     VALUES ('$customer_name', '$customer_email', '$customer_number', '$customer_type', '$customer_country', '$customer_state', '$customer_city')";

    $check = mysqli_query($conn,$sql);
   if ($check) {
   ?>
    <script type="text/javascript">
        alert('Thank you for Contacting us');
        window.location.href="../catalogue.php";

    </script>
   <?php
   }
   else {
    echo"not inserted";
   }
}


// Register warranty form  Get

if (isset($_POST["register-warranty"])){
    $customer_name= $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];
    $customer_number = $_POST['customer_number'];
    $vehicle_type = $_POST['vehicle_type'];
    $vehicle_category = $_POST['vehicle_category'];
    $vehicle_model = $_POST['vehicle_model'];
    $battery_type = $_POST['battery_type'];
    $purchase_date = $_POST['purchase_date'];
    $customer_country = $_POST['customer_country'];
    $customer_state = $_POST['customer_state'];
    $customer_city = $_POST['customer_city'];
    $customer_address = $_POST['customer_address'];
    $dealer_name = $_POST['dealer_name'];
    $dealer_address = $_POST['dealer_address'];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle the form data
    $Warranty_invoice = $_POST['warranty_invoice'];

    // Check if a file has been uploaded
    if (isset($_FILES['warranty_invoice'])) {
        $fileType = $_FILES['warranty_invoice']['type'];
        $filename = $_FILES['warranty_invoice']['name'];
        $tempname = $_FILES['warranty_invoice']['tmp_name'];

        // Determine the destination based on the file type
        if ($fileType == 'application/pdf') {
            $warranty_destination = 'warranty_invoice/pdf/' . $filename;
        } elseif ($fileType == 'image/jpeg') { // Check if the file type is JPEG
            $warranty_destination = 'warranty_invoice/img/' . $filename;
        } else {
            echo "<script>alert('Only PDF or JPEG files are allowed');</script>";
            exit();
        }

        // Move the uploaded file to the destination
        if (move_uploaded_file($tempname, $warranty_destination)) {
            echo "<script>alert('File has been uploaded successfully');</script>";
        } else {
            echo "<script>alert('Failed to upload file');</script>";
        }
    } else {
        echo "<script>alert('No file uploaded');</script>";
    }

    // Process the warranty invoice or other form data here
    // For example, save to a database or perform other actions
    // Example:
    // $query = "INSERT INTO warranty_table (warranty_invoice, file_path) VALUES ('$Warranty_invoice', '$warranty_destination')";
    // mysqli_query($conn, $query);
}

    // $Warranty_invoice = $_POST['warranty_invoice'];
    $sql = "INSERT INTO nxte_register_warranty (customer_name, customer_email, customer_number, vehicle_type, vehicle_category, vehicle_model, battery_type, purchase_date,customer_country,customer_state, customer_city,dealer_name,dealer_address,warranty_invoice)
     VALUES ('$customer_name', '$customer_email', '$customer_number', '$vehicle_type', '$vehicle_category', '$vehicle_model', '$battery_type', '$purchase_date', '$customer_country','$customer_state', '$customer_city', '$dealer_name','$dealer_address','$warranty_destination')";

    $check = mysqli_query($conn,$sql);
   if ($check) {
   ?>
    <script type="text/javascript">
        alert('Thank you for Contacting us');
        window.location.href="../register-warranty.php";

    </script>
   <?php
   }
   else {
    echo"not inserted";
   }
}


// get catalogue form / get catalogue form
function get_catalogue_enquiry(){
    include('db-conn.php');
    $sql="SELECT * FROM nxte_catalogue_enquiry ORDER BY id DESC";
     $check = mysqli_query($conn,$sql);
     $sno=1;
     while ($result=mysqli_fetch_assoc($check))
     {
      echo $output="<tr>
        <td>".$sno++."</td>
       <td>".$result['customer_name']."</td>
       <td>".$result['customer_email']."</td>
       <td>".$result['customer_number']."</td>
       <td>".$result['customer_type']."</td>
       <td>".$result['customer_country']."</td>
       <td>".$result['customer_state']."</td>
       <td>".$result['customer_city']."</td>
       </tr>";
     }  
     
}

// get testdrive form / get testdrive form
function get_warranty(){
    include('db-conn.php');
    $sql="SELECT * FROM nxte_register_warranty ORDER BY id DESC";
     $check = mysqli_query($conn,$sql);
     $sno=1;
     while ($result=mysqli_fetch_assoc($check))
     {
      echo $output="<tr>
        <td>".$sno++."</td>
       <td>".$result['customer_name']."</td>
       <td>".$result['customer_email']."</td>
       <td>".$result['customer_number']."</td>
       <td>".$result['vehicle_type']."</td>
       <td>".$result['vehicle_category']."</td>
       <td>".$result['vehicle_model']."</td>
       <td>".$result['vehicle_model']."</td>
       <td>".$result['battery_type']."</td>
       <td>".$result['purchase_date']."</td>
       <td>".$result['customer_country']."</td>
       <td>".$result['customer_state']."</td>
       <td>".$result['customer_city']."</td>
       <td>".$result['dealer_name']."</td>
       <td>".$result['dealer_address']."</td>
       <td>".$result['warranty_invoice']."</td>
       </tr>";
     }  
     
}
// job section
// store job queries
if (isset($_POST["job_querie_btn"])){
    $candidate_name= $_POST['candidate_name'];
    $candidate_email = $_POST['candidate_email'];
    $candidate_number = $_POST['candidate_number'];
    $total_experience = $_POST['total_experience'];
    $current_company = $_POST['current_company'];
    $current_profile = $_POST['current_profile'];
    $bio = $_POST['bio'];
    // accept resume/ accept pdf
if (isset($_FILES['upload_resume'])) {
    $filename = $_FILES['upload_resume']['name'];
    $tempname = $_FILES['upload_resume']['tmp_name'];
    $upload_resume_destination = 'assets/img/candidate_resume/' . $filename;
    
    // Get the file extension
    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);

    // Check if the file is a PDF
    if (strtolower($file_extension) === 'pdf') {
        // Move the uploaded file to the destination directory
        if (move_uploaded_file($tempname, $upload_resume_destination)) {
            // echo "<script>alert('Resume uploaded successfully');</script>";
        } else {
            echo "<script>alert('Failed to upload resume');</script>";
        }
    } else {
        echo "<script>alert('Please upload a PDF file');</script>";
    }
} else {
    echo "<script>alert('No file uploaded');</script>";
}

    $upload_resume = $_POST['upload_resume'];
    $added_on=date('M D,Y');
$sql = "INSERT INTO nxte_job_queries (candidate_name, candidate_email, candidate_number, total_experience, current_company, current_profile, bio, upload_resume, added_on)
VALUES ('$candidate_name', '$candidate_email', '$candidate_number', '$total_experience', '$current_company', '$current_profile', '$bio', '$upload_resume_destination', '$added_on')";
$check = mysqli_query($conn,$sql);
   if ($check) {
   ?>
    <script type="text/javascript">
        alert('Inserted Successfully');
        window.location.href="../career.php";

    </script>
   <?php
   }
   else {
    echo"not inserted";
   }

}

function get_job_queries() {
    include('db-conn.php');
    $sql = "SELECT * FROM nxte_job_queries ORDER BY id DESC";
    $check = mysqli_query($conn, $sql);
    $sno = 1;

    while ($result = mysqli_fetch_assoc($check)) {
        echo $output = "<tr>
            <td>".$sno++."</td>
            <td>".$result['candidate_name']."</td>
            <td>".$result['candidate_email']."</td>
            <td>".$result['candidate_number']."</td>
            <td>".$result['total_experience']."</td>
            <td>".$result['current_company']."</td>
            <td>".$result['current_profile']."</td>
            <td>".$result['bio']."</td>
            <td>".$result['upload_resume']."</td>
            <td>".$result['added_on']."</td>
           

        </tr>";
    }
}

// add Job section

if (isset($_POST['add-job'])) {

    $job_title = $_POST['job_title'];
    $job_description = $_POST['job_description'];
    $qualifications = $_POST['qualifications'];
    $responsibilities = $_POST['responsibilities'];
    $benefits = $_POST['benefits'];
    $job_type = $_POST['job_type'];
    $job_location = $_POST['job_location'];
    $salary_min = $_POST['salary_min'];
    $salary_max = $_POST['salary_max'];
    
    // Generate necessary fields for database insertion
    $added_on = date('M D, Y');

    // Insert data into nxte_job table
    $sql = "INSERT INTO digitace_job(job_title, job_description, qualifications, responsibilities, benefits, job_type, job_location, salary_min, salary_max, added_on)
            VALUES ('$job_title', '$job_description', '$qualifications', '$responsibilities', '$benefits', '$job_type', '$job_location', '$salary_min', '$salary_max', '$added_on')";
    
    if (mysqli_query($conn, $sql)) {
        ?>
        <script type="text/javascript">
            alert('Job Added Successfully');
            window.location.href = "view-job-listed.php";
        </script>
        <?php
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}


// add Job section end


// show listed job

function get_job_listed() {
    include('db-conn.php'); // Assuming db-conn.php includes your database connection
    
    $sql = "SELECT * FROM digitace_job ORDER BY job_id DESC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $sno = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>".$sno++."</td>
                <td>".$row['job_id']."</td>
                <td>".$row['job_title']."</td>
                <td>".$row['job_description']."</td>
                <td>".$row['qualifications']."</td>
                <td>".$row['responsibilities']."</td>
                <td>".$row['benefits']."</td>
                <td>".$row['job_type']."</td>
                <td>".$row['job_location']."</td>
                <td>".$row['salary_min']."</td>
                <td>".$row['salary_max']."</td>
                <td>".$row['added_on']."</td>
                <td><a href='view-job-listed.php?job_id=".$row['job_id']."'>Delete</a></td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='11'>No jobs listed yet.</td></tr>";
    }

    mysqli_close($conn);
}

// show listed job section end

?>