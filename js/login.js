function goToForm(form) {
            $('.login-wrapper > form:visible').fadeOut(500, function() {
                $('#form-' + form).fadeIn(500);
            });
        }
        $(function() {
            $('.goto-login').click(function() {
                goToForm('login');
            });
            $('.goto-forgot').click(function() {
                goToForm('forgot');
            });
            $('.goto-register').click(function() {
                goToForm('register');
            });
        });