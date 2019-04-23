<?php
exec('play.vbs', $output, $return);

// Return will return non-zero upon an error
if (!$return) {
    echo "Icecast Run Successfully";
} else {
    echo "Icecast Failed To Run";
}
?>