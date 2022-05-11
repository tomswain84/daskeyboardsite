<!-- Modal Trigger - Account Login -->
<a class="account-login d-flex align-items-center text-decoration-none order-3" href="#" title="Account Login" data-bs-toggle="modal" data-bs-target="#accountLogin">
    <i class="fa-solid fa-circle-user text-red bg-gray-darker rounded-circle fs-5"></i><i class="fa-solid fa-caret-down text-white small ms-1"></i>
</a>
<!-- Modal - Account Login -->
<form class="modal fade" id="accountLogin" tabindex="-1" aria-labelledby="accountLogin" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-gray-darker">
            <div class="modal-header bg-gray-dark text-white border-bottom">
                <h5 class="modal-title" id="accountLogin">Customer Login</h5>
                <a href="#" class="btn btn-outline-primary" data-bs-dismiss="modal">Close<i class="fa-solid fa-xmark ms-2"></i></a>
            </div>
            <div class="modal-body bg-gray-darker">
                <h2 class="text-white"><span class="text-red">Login</span> to  Your Account</h2>
                <p class="text-white mb-5">If you have an account with us, please log in.</p>

                <div class="input-group mb-3">
                    <span class="input-group-text border-0 rounded-0 bg-gray-dark text-white" id="email"><i class="fa-solid fa-envelope"></i></span>
                    <input type="text" class="form-control rounded-0 border-0 bg-gray-light oswald text-white" placeholder="Email" aria-label="email" aria-describedby="email">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text border-0 rounded-0 bg-gray-dark text-white" id="password"><i class="fa-solid fa-unlock-keyhole"></i></span>
                    <input type="password" id="inputPassword" class="form-control rounded-0 border-0 bg-gray-light oswald text-white" placeholder="Password" aria-label="password" aria-describedby="password">
                </div>
            </div>
            <div class="modal-footer bg-gray-dark border-top">
                <a href="https://shop.daskeyboard.com/account/login?return_url=%2Faccount#recover" class="text-white text-decoration-none me-auto">Forgot Password?</a>
                <a class="btn">Create an Account</a>
                <a type="submit" class="btn btn-primary">Login<i class="fa-solid fa-right-to-bracket ms-2"></i></a>
            </div>
        </div>
    </div>
</form>