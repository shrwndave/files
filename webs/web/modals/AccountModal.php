<div class="modal fade bg-black" id="update<?= $user['id'] ?>" >
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Update <b><?= ucwords($user['username']) ?></b></h5>
                <em class="color-red">Unfortunately, Updating an account wont work this time.<em> 
            </div>
            <form action="../page/account.php?function=update&&sub_page=update" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row marginleft-38px">
                                <input placeholder="Name" 
                                       type="text" 
                                       class="css login-input marginbottom-10px width-90 padding-4px border-gray float-left" 
                                       id="name" 
                                       name="name"
                                       value="<?= $user['username'] ?>"
                                       required aria-label="Name">


                                <br>

                                <label class="login-label left-text float-left width-20 marginbottom-10px color-gray">
                                    Email:
                                </label>

                                <input type="email" 
                                       placeholder="@gmail.com, @yahoo.com, etc" 
                                       class="css login-input float-left width-70 padding-4px border-gray marginbottom-10px"
                                       id="email"
                                       name="email" 
                                       value="<?= $user['email'] ?>"
                                       required aria-label="Email">


                                <label class="login-label left-text float-left width-20 marginbottom-10px color-gray">
                                    Contact:
                                </label>

                                <input placeholder="+63" 
                                       type="text" 
                                       class="contact login-input float-left width-70 padding-4px border-gray marginbottom-10px"
                                       id="contact" 
                                       value="<?= $user['contact'] ?>"
                                       name="contact">

                        
                                <!--<button class="float-left padding-4px color-white bg-primary font-25px border-none marginleft-105px width-20 marginbottom-20px bolder disabled">Verify</button>

                                <input placeholder="6 - Digit Code" type="text" class="css login-input float-left padding-4px marginleft-38px width-43 border-gray marginbottom-20px">-->

                                <label class="login-label color-gray float-left left-text full-width marginbottom-10px">
                                    Password:
                                </label>

                                <input type="text" 
                                       class="login-input padding-4px marginbottom-20px width-90 border-gray" 
                                       id="password" 
                                       name="password"  
                                       value=""
                                       required aria-label="Password">

                                <label class="login-label color-gray float-left left-text full-width marginbottom-10px">
                                    Confirm Password:
                                </label>

                                <input type="text" 
                                       class="login-input padding-4px marginbottom-20px width-90 border-gray" 
                                       id="confirm_password" 
                                       name="confirm_password"
                                       value=""
                                       required aria-label="Confirm Password">
                            </div>
                        </div>
                    </div>
                                <input type="hidden" value="<?= $user['id'] ?>">
                </div>
                <div class="modal-footer d-flex">
                    <button class="btn btn-primary col-sm-5" type="submit">Save</button>
                    <button class="btn btn-secondary col-sm-5" data-bs-dismiss="modal" >Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade bg-black" id="delete<?= $user['id'] ?>" >
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-centered padding-20px">
                <h3>Are you sure you want to delete <b><?= ucwords($user['username']) ?></b>?</h3>
                <em class="color-red">Unfortunately, same with updating an account, deleting wont work this time too.<em> 
            </div>
            <form action="../page/account.php?function=delete&&sub_page=deleteUser" method="post">
                                <input type="hidden" value="<?= $user['id'] ?>">
                <div class="modal-footer mx-auto">
                    <button class="btn btn-danger" type="submit"><span class="fa fa-trash"></span> Delete</button> ||
                    <button class="btn btn-secondary" data-bs-dismiss="modal" ><span class="fa fa-ban"></span> Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>