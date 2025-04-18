@extends('layouts.app')

@section('main')
    <section class="gradient-custom">
        <div class="container d-flex justify-content-center align-items-center py-5 h-100">
            <div style="width: 500px;">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <form class="pb-4" id="register-form" action="{{route('register.store')}}"
                              method="POST">
                            @method('POST')
                            @csrf
                            <h2 class="fw-bold mb-2 text-uppercase">Регистрация</h2>

                            <div class="form-outline form-white mb-4">
                                <label class="form-label" for="name">Фамилия</label>
                                <input type="text" name="name" id="name" class="form-control form-control-lg"/>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <label class="form-label" for="name">Имя</label>
                                <input type="text" name="surname" id="surname" class="form-control form-control-lg"/>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <label class="form-label" for="email">Почта</label>
                                <input type="email" name="email" id="email"
                                       class="form-control form-control-lg"/>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <label class="form-label" for="password">Пароль</label>
                                <input type="password" name="password" id="password"
                                       class="form-control form-control-lg"/>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <label class="form-label" for="password_confirmation">Подтвердите пароль</label>
                                <input type="password" name="password_confirmation" id="password"
                                       class="form-control form-control-lg"/>
                            </div>

                            <button class="btn btn-outline-light btn-lg px-5" type="submit">Зарегистрироваться</button>
                        </form>
                        <div>
                            <p class="mb-0">Есть аккаунт? <a href="{{route('login')}}"
                                                             class="text-white-50 fw-bold">Войти</a>
                            </p>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

