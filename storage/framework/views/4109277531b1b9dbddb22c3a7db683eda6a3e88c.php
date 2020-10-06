<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-12" style="margin-top: 0px;">

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header border-0">
        <?php if(auth()->check() && auth()->user()->hasRole('Reception')): ?>
        <a href="<?php echo e(route('patient.create')); ?>" class="btn btn-primary btn-sm float-right">Add New Patient</a>
        <?php endif; ?>
        <h3 class="mb-0">Patient tables</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered align-items-center table-white table-flush example" id="dataTable" width="100%" cellspacing="0">
                  <thead class="thead-light">
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>PRN</th>
                      <th>Father Name</th>
                      <th>Age</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody id="medicineTable">
                    <?php $i=1;?>
                    <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($i++); ?></td>
                        <td><?php echo e($patient->name); ?></td>
                        <td><?php echo e($patient->PRN); ?></td>
                        <td><?php echo e($patient->fatherName); ?></td>
                        <td><?php echo e($patient->age); ?></td>
                        <td><a href="<?php echo e(route('patient.edit',$patient->id)); ?>"><i class="btn fas fa-edit text-white"  style="background-color: #825ee4"></i></a>
                        
                        <a href="<?php echo e(route('patient.show',$patient->id)); ?>" > <i class="btn fas fa-info text-white" style="background-color: #825ee4"></i></a>

                          <form method="post" onsubmit="return confirm('Are you sure to delete?');" action="<?php echo e(route('patient.destroy',$patient->id)); ?>" class="d-inline-block">

                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn" style="background-color: #825ee4"><i class="fas fa-trash text-white" ></i></button>
                          </form>
                        </td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                  </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
 $('div.alert').delay(3000).slideUp(300);
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontendTemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/myprj/gp-clinic/resources/views/patients/index.blade.php ENDPATH**/ ?>