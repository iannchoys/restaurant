<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login / Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Переключение между формами -->
                <ul class="nav nav-tabs" id="authTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab">Register</a>
                    </li>
                </ul>
                
                <!-- Формы -->
                <div class="tab-content mt-3">
                    <!-- Логин -->
                    <div class="tab-pane fade show active" id="login" role="tabpanel">
                        <form id="loginForm">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-warning btn-block">Login</button>
                        </form>
                        <div id="loginMessage" class="mt-2"></div>
                    </div>
                    
                    <!-- Регистрация -->
                    <div class="tab-pane fade" id="register" role="tabpanel">
                        <form id="registerForm">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-warning btn-block">Register</button>
                        </form>
                        <div id="registerMessage" class="mt-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>