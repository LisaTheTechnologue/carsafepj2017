<?php
				$file = '../files/safe-call.pdf';
				$filename = 'safe-call.pdf';
				header('Content-type: application/pdf');
				header('Content-Disposition: inline; filename="' . $filename . '"');
				header('Content-Transfer-Encoding: binary');
				header('Accept-Ranges: bytes');
				@readfile($file);
?>
