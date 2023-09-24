<?php
include_once 'include/config.php';
	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";
	$msg = "";

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, '<script>
			swal("خطأ !", " اسم المستخدم مطلوبة ", "error");
			</script>'); }
		if (empty($email)) { array_push($errors, '<script>
			swal("خطأ !","البريد الالكتروني مطلوبة ", "error");
			</script>'); }
		if (empty($password_1)) { array_push($errors, '<script>
			swal("خطأ !", "كلمة المرور مطلوبة ", "error");
			</script>'); }

		if ($password_1 != $password_2) {
			array_push($errors, '<script>
			swal("خطأ !", " تاكيد كلمة المرور مطلوبة ", "error");
			</script>');
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = '    <script>
			swal("تم اضافة!", "تم اضافتة بنجاح ", "success");
			</script>';
			$msg = '    <script>
			swal("تم اضافة!", "تم اضافتة بنجاح ", "success");
			</script>';
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, '<script>
			swal("خطأ !", " اسم المستخدم مطلوبة ", "error");
			</script>');
		}
		if (empty($password)) {
			array_push($errors, '<script>
			swal("خطأ !", "كلمة المرور مطلوبة ", "error");
			</script>');
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);
			$user_info = mysqli_query($db, "SELECT * FROM `users`");
			$user = mysqli_fetch_assoc($user_info);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['id'] = $user['id'];
				$_SESSION['success'] = '    <script>
				swal("تم تسجيل الدخول!", "تم تسجيل الدخول بنجاح ", "success");
				</script>';
				header('location: index.php');
			}else {
				array_push($errors, '<script>
				swal("خطأ !", " اسم مستخدم / كلمة مرور خاطئة ", "error");
				</script>');
			}
		}
	}

?>