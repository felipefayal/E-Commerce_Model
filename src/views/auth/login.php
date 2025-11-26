<?php 

require __DIR__ . '/../layouts/header.php'; 
?>

<div class="login-container">
    <h2>Login</h2>
    
    <?php if(isset($error)): ?>
        <div class="alert-danger"><?= $error ?></div>
    <?php endif; ?>

    <form action="<?= base_url('login') ?>" method="POST">
        <input type="email" name="email" placeholder="Seu e-mail" required>
        <input type="password" name="senha" placeholder="Sua senha" required>
        <button type="submit">Entrar</button>
    </form>
</div>

<?php require __DIR__ . '/../layouts/footer.php'; ?>