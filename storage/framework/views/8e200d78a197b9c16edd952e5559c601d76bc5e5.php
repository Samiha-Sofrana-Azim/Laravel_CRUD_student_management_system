<div class="card mb-3">
    <img src="https://media.istockphoto.com/vectors/personal-info-data-icon-identification-card-icon-personal-info-data-vector-id1191487534?s=612x612" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">List of students</h5>
        <p class="card-text"> Find here all the informatins about students in the system</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">CNE</th>
                <th scope="col">First name</th>
                <th scope="col">Second Name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>

            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($student->cne); ?></td>
                    <td><?php echo e($student->firstName); ?></td>
                    <td><?php echo e($student->secondName); ?></td>
                    <td><?php echo e($student->age); ?></td>
                    <td><?php echo e($student->speciality); ?></td>
                    <td>

                        <a href="<?php echo e(url('/edit/'.$student->id)); ?>" class="btn btn-sm btn-warning">Edit</a>

                    </td>


                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>




<?php /**PATH /home/bjit/BJIT/Domain_Specific_Training/Week07/basic_blog/resources/views/studentslist.blade.php ENDPATH**/ ?>