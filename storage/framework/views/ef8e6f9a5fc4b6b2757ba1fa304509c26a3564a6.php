<?php if (isset($component)) { $__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Index::class, ['user' => $user,'isAdmin' => $isAdmin]); ?>
<?php $component->withName('admin.index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Dolar Rate</h4>
                        <p class="card-description">Edit your website DOLAR RATE here</p>
                        <?php if(session()->has('msg')): ?>
                            <p class="alert alert-info"><?php echo e(session()->get('msg')); ?></p>
                        <?php endif; ?>
                        <form action="<?php echo e(route('rate.update')); ?>" method="post" >
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="rate">Rate</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="rate"
                                    name="rate"
                                    pattern="[0-9]+([\.,][0-9]+)?"
                                    value="<?php echo e($data); ?>"
                                    required
                                />
                            </div>

                            <?php if($isAdmin === true): ?>
                                <button type="submit" class="btn btn-primary mr-2">Proceed</button>
                            <?php else: ?>
                                <button onclick="alert('Only admin can change dolar rate')" type="button" class="btn btn-primary mr-2">Proceed</button>
                            <?php endif; ?>
                            <a href="<?php echo e(route("rate.index")); ?>" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816)): ?>
<?php $component = $__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816; ?>
<?php unset($__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\restoapp\resources\views/admin/change_dolar_rate.blade.php ENDPATH**/ ?>