<?php $__env->startSection('content'); ?>
    <div class="container">
      <h1>Crear Cuenta de Usuario</h1>
      <p> Ingresa los datos </p>

      <?php echo Form::open(['url' => route('user-create')]); ?>

          <div class="form-group">
              <?php echo Form::label('name'); ?>

              <?php echo Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Zingelbert Bembledack']); ?>

          </div>
          <div class="form-group">
              <?php echo Form::label('email'); ?>

              <?php echo Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'me@mydomain.com']); ?>

          </div>
          <div class="form-group">
              <?php echo Form::label('password'); ?>

              <?php echo Form::password('password', ['class' => 'form-control']); ?>

          </div>
          <div class="form-group">
              <?php echo Form::label('country_code', 'Country Code'); ?>

              <?php echo Form::text('country_code', '', ['class' => 'form-control', 'id' => 'authy-countries']); ?>

          </div>
          <div class="form-group">
              <?php echo Form::label('phone_number', 'Phone number'); ?>

              <?php echo Form::text('phone_number', '', ['class' => 'form-control', 'id' => 'authy-cellphone']); ?>

          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary">Sign up</button>
          </div>
      <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>