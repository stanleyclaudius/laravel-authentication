let flashdata = $('.flashdata').data('flash');
if (flashdata === 'no credential') {
    swal.fire({
        title: 'Sign In Failed',
        text: 'Your credentials can\'t be found!',
        icon: 'error'
    });
} else if (flashdata === 'user created') {
    swal.fire({
        title: 'One More Step',
        text: 'A verification code has been sent to your email!',
        icon: 'success'
    });
} else if (flashdata === 'no verif') {
    swal.fire({
        title: 'Access Blocked',
        text: 'You have no right to access this page!',
        icon: 'error'
    });
} else if (flashdata === 'no token found') {
    swal.fire({
        title: 'Verify Failed',
        text: 'Verification code not match!',
        icon: 'error'
    });
} else if (flashdata === 'verify') {
    swal.fire({
        title: 'Account Verify',
        text: 'Your account has been verified!',
        icon: 'success'
    });
} else if (flashdata === 'logout') {
    swal.fire({
        title: 'Logout Success',
        text: 'You have been logout!',
        icon: 'success'
    });
} else if (flashdata === 'resend') {
    swal.fire({
        title: 'Code Resend',
        text: 'New verification code has been send to your email!',
        icon: 'success'
    });
} else if (flashdata === 'email not found') {
    swal.fire({
        title: 'Failed Reset',
        text: 'Your email not found, or perhaps you don\'t use your registered email at this app!',
        icon: 'error'
    });
} else if (flashdata === 'reset link send') {
    swal.fire({
        title: 'Check Your Email',
        text: 'A reset link has been sent to your email that you fill just now!',
        icon: 'success'
    });
} else if (flashdata === 'password changed') {
    swal.fire({
        title: 'Password Changed',
        text: 'Your password has been changed!',
        icon: 'success'
    });
}