<?php
exec('stop.vbs', $output, $return);

// Return will return non-zero upon an error
if (!$return) {
    echo "Icecast Stopped Successfully";
} else {
    echo "Icecast Failed To Stop";
}
?>