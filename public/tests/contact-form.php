<?php
$subjectPrefix = '[Contato via Site]';
$emailTo = 'thomas159@gmail.com';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name     = stripslashes(trim($_POST['form-name']));
    $email    = stripslashes(trim($_POST['form-email']));
    $phone    = stripslashes(trim($_POST['form-tel']));
    $subject  = stripslashes(trim($_POST['form-assunto']));
    $message  = stripslashes(trim($_POST['form-mensagem']));
    $pattern  = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

    if (preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $subject)) {
        die("Header injection detected");
    }

    $emailIsValid = preg_match('/^[^0-9][A-z0-9._%+-]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/', $email);

    if($name && $email && $emailIsValid && $subject && $message){
        $subject = "$subjectPrefix $subject";
        $body = "Nome: $name <br /> Email: $email <br /> Telefone: $phone <br /> Mensagem: $message";

        $headers  = 'MIME-Version: 1.1' . PHP_EOL;
        $headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
        $headers .= "From: $name <$email>" . PHP_EOL;
        $headers .= "Return-Path: $emailTo" . PHP_EOL;
        $headers .= "Reply-To: $email" . PHP_EOL;
        $headers .= "X-Mailer: PHP/". phpversion() . PHP_EOL;

        mail($emailTo, $subject, $body, $headers);
        $emailSent = true;

    } else {
        $hasError = true;
    }
}
?><!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Contact Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
    <div class="jumbotron">
        <h1>Simple PHP Contact Form</h1>
        <p>A Simple Contact Form developed in PHP with HTML5 Form validation. Has a fallback in jQuery for browsers that do not support HTML5 form validation.</p>
    </div>
    <?php if(!empty($emailSent)): ?>
        <div class="col-md-6 col-md-offset-3">
            <div class="alert alert-success text-center">Sua mensagem foi enviada com sucesso.</div>
        </div>
    <?php else: ?>
        <?php if(!empty($hasError)): ?>
        <div class="col-md-5 col-md-offset-4">
            <div class="alert alert-danger text-center">Houve um erro no envio, tente novamente mais tarde.</div>
        </div>
        <?php endif; ?>

    <div class="col-md-6 col-md-offset-3">
        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" id="contact-form" class="form-horizontal" role="form" method="post">
            <div class="form-group">
                <label for="name" class="col-lg-2 control-label">Nome</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Nome" required>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                    <input type="email" class="form-control" id="form-email" name="form-email" placeholder="Email" required>
                </div>
            </div>
            <div class="form-group">
                <label for="tel" class="col-lg-2 control-label">Telefone</label>
                <div class="col-lg-10">
                    <input type="tel" class="form-control" id="form-tel" name="form-tel" placeholder="Telefone">
                </div>
            </div>
            <div class="form-group">
                <label for="assunto" class="col-lg-2 control-label">Assunto</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="form-assunto" name="form-assunto" placeholder="Assunto" required>
                </div>
            </div>
            <div class="form-group">
                <label for="mensagem" class="col-lg-2 control-label">Mensagem</label>
                <div class="col-lg-10">
                    <textarea class="form-control" rows="3" id="form-mensagem" name="form-mensagem" placeholder="Mensagem" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-default">Enviar</button>
                </div>
            </div>
        </form>
    </div>
    <?php endif; ?>

    <!--[if lt IE 9]>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!--<![endif]-->
    <script type="text/javascript" src="assets/js/contact-form.js"></script>
</body>
</html>
