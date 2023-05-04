<h2>Contact Us</h2>
<?php
require_once('./file.php');
$errors = [];

try {
    if (isset($_POST['contact_form'])) {

        // Validation
        if (empty($_POST['name'])) {
            $errors['name'] = "Please give a valid name.";
            // throw new Exception("Please give a valid name.", 1);
        }
        if (empty($_POST['email'])) {
            $errors['email'] = "Please give an email address.";
        }

        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Please give a valid email.";
        }

        if (empty($_POST['subject'])) {
            $errors['subject'] = "Please give a valid subject.";
        }

        if (empty($_POST['temp_password'])) {
            $errors['temp_password'] = "Please give a valid temporary password.";
        }
    }
} catch (\Exception $e) {
    $errors['global'] = $e->getMessage();
}

if (count($errors) > 0) {
    $err_global = "Failed to submit form. Please try again.";

    if (isset($errors['global'])) {
        $err_global .= ' Error: ' .$errors['global'];
    }
    $errors['global'] = $err_global;
} else {
    if (isset($_POST['contact_form'])) {
        // Sanitization
        $insert_data = [
            'name'          => htmlspecialchars($_POST['name']),
            'email'         => filter_var($_POST['email'], FILTER_VALIDATE_EMAIL),
            'subject'       => htmlspecialchars($_POST['subject']),
            'temp_password' => htmlspecialchars($_POST['temp_password']),
            'attachment'    => $file_name
        ];
        var_dump($insert_data);
    }
}

?>

<?php
if (!empty($errors['global'])) {
    echo "<p style='color:red; border: 1px solid #ccc; padding: 10px;'>" . $errors['global'] . "</p>";
} elseif (isset($_POST['contact_form'])) {
    echo "<p style='color:green'>Your form is submitted !</p>";
}
?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">

    <label for="name">Name</label><br>
    <input type="text" id="name" name="name"> <br>
    <span style="color: red"><?php echo !empty($errors['name']) ? $errors['name'] : '' ?></span>
    <br>

    <label for="email">Email</label><br>
    <input type="email" id="email" name="email"> <br>
    <span style="color: red"><?php echo !empty($errors['email']) ? $errors['email'] : '' ?></span>
    <br>

    <label for="subject">Subject</label><br>
    <input type="text" id="subject" name="subject"> <br>
    <span style="color: red"><?php echo !empty($errors['subject']) ? $errors['subject'] : '' ?></span>
    <br>

    <label for="temp_password">Temp Password</label><br>
    <input type="password" id="temp_password" name="temp_password"> <br>
    <span style="color: red"><?php echo !empty($errors['temp_password']) ? $errors['temp_password'] : '' ?></span>
    <br>

    <label for="attachment">Attachment (PDF or Image) (optional)</label><br>
    <input type="file" id="attachment" name="attachment"> <br>
    <span style="color: red"><?php echo !empty($errors['attachment']) ? $errors['attachment'] : '' ?></span>
    <br>

    <input type="submit" value="Send" name="contact_form" />
</form>
