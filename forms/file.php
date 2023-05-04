   <?php 
   // Upload file
        $file_name = null;
        if (!empty($_FILES['attachment']['name'])) {

            // Undefined | Multiple Files | $_FILES Corruption Attack
            // If this request falls under any of them, treat it invalid.
            if (!isset($_FILES['attachment']['error']) || is_array($_FILES['attachment']['error'])) 
            {
                throw new RuntimeException('Invalid parameters.');
            }

            // Check file size exceeded or not
            $file_size = !empty($_FILES['attachment']['size']) ? intval($_FILES['attachment']['size']) : 0;
            $upto_supported_size = 5 * 1024 * 1000; // 5MB

            if ($file_size > $upto_supported_size) {
                $errors['attachment'] = "File size exceeded. Max upload limit is 5MB";
                throw new Exception($errors['attachment'], 1);
            }

            // Mime type of file
            $finfo = new finfo(FILEINFO_MIME_TYPE);
            $file_ext = array_search(
                $finfo->file($_FILES['attachment']['tmp_name']),
                array(
                    'jpg' => 'image/jpg',
                    'jpg' => 'image/jpeg',
                    'png' => 'image/png',
                    'gif' => 'image/gif',
                    'gif' => 'image/bnf',
                    'pdf' => 'application/pdf'
                ),
                true
            );

            if (false === $file_ext) {
                $errors['attachment'] = "File should be a valid image or PDF file";
                throw new Exception($errors['attachment'], 1);
            }

            // Sanitize file name and make a new name
            $file_name = 'mahbub-' . time() . '.' . $file_ext;

            // Upload file
            if (!move_uploaded_file($_FILES['attachment']['tmp_name'], "uploads/" . $file_name)) {
                $errors['attachment'] = "File uploads fail, please try again.";
                throw new Exception($errors['attachment']);
            }
        }