<?php $__env->startSection('title','Área do Administrador'); ?>
<?php $__env->startSection('content'); ?>
    <form class="form-class" action="/updateuser" method="POST">
        <?php echo csrf_field(); ?>

        <input type="hidden" name="id" value="<?php echo e($user->id); ?>">

        <?php if(isset($success)): ?>
            <div class="alert alert-success text-center">
                Endereço atualizado com sucesso!
            </div>
        <?php endif; ?>


        <div class="mb-3">
            <label for="name" class="form-label">Nome: </label>
            <input
                type="text"
                class="form-control"
                id="name"
                name="name"
                value="<?php echo e($user->name); ?>"
                disabled
            >
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">Cpf: </label>
            <input
                type="text"
                class="form-control"
                id="cpf"
                name="cpf"
                value="<?php echo e($user->cpf); ?>"
                disabled
            >
        </div>
        <div class="mb-3">
            <label for="plate" class="form-label">Placa: </label>
            <input
                type="text"
                class="form-control"
                id="plate"
                name="plate"
                value="<?php echo e($user->plate); ?>"
                disabled
            >
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Endereço: </label>
            <input
                type="text"
                class="form-control"
                id="address"
                name="address"
                value="<?php echo e($user->address); ?>"
            >
        </div>
        <div class="mb-3">
            <label for="tel" class="form-label">Telefone: </label>
            <input
                type="text"
                class="form-control"
                id="tel"
                name="tel"
                value="<?php echo e($user->tel); ?>"
                disabled
            >
        </div>

        <div class="d-grid gap-2">
            <input class="btn btn-primary" type="submit" id="btnAutenticar" value="Atualizar Cadastro">
        </div>

        <a href="/">
            <div class="d-grid gap-3 m-top">
                <button class="btn btn-dark" type="button" id="btnVoltar">Voltar</button>
            </div>
        </a>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proAutoTest\userAPI\resources\views/edit.blade.php ENDPATH**/ ?>