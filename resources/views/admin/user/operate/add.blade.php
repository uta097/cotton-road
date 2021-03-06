@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">ユーザ追加</h1>
        <div class="mb-2">
            <form method="POST" action="{{ url('/admin/user/operate/add') }}">
                @csrf
                <div>
                    <div class="row mb-2">
                        <label for="user_id" class="col-md-2">ユーザID</label>
                        <input type="text" id="user_id" name="user_id" class="form-control d-inline col-md-7" maxlength="13" required autofocus>
                    </div>
                    @if ($errors->has('user_id'))
                        <div class="row mb-2">
                            <div class="col-md-2"></div>
                            <div class="text-danger">{{ $errors->first('user_id') }}</div>
                        </div>
                    @endif
                </div>

                <div>
                    <div class="row mb-2">
                        <label for="username" class="col-md-2">ユーザ名</label>
                        <input type="text" id="username" name="username" class="form-control d-inline col-md-7" maxlength="20" required>
                    </div>
                    @if ($errors->has('username'))
                        <div class="row mb-2">
                            <div class="col-md-2"></div>
                            <span class="text-danger">{{ $errors->first('username') }}</span>
                        </div>
                    @endif
                </div>

                <div>
                    <div class="row mb-2">
                        <label for="password" class="col-md-2">パスワード</label>
                        <input type="password" id="password" name="password" class="form-control d-inline col-md-7" required>
                    </div>
                </div>

                <div>
                    <div class="row mb-2">
                        <label for="password_confirm" class="col-md-2">パスワード(確認)</label>
                        <input type="password" id="password_confirm" name="password_confirmation" class="form-control d-inline col-md-7" required>
                    </div>
                    @if ($errors->has('password'))
                        <div class="row mb-2">
                            <div class="col-md-2"></div>
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        </div>
                    @endif
                </div>

                <div>
                    <div class="row mb-2">
                        <label class="col-md-2">性別</label>
                        <div class="col-md-7">
                            <div class="d-inline">
                                <input type="radio" name="sex" id="man" value="man" checked required>
                                <label class="form-check-label" for="man">男</label>
                            </div>
                            <div class="d-inline">
                                <input type="radio" name="sex" id="woman" value="woman" required>
                                <label class="form-check-label" for="woman">女</label>
                            </div>
                            <div class="d-inline">
                                <input type="radio" name="sex" id="other" value="other" required>
                                <label class="form-check-label" for="other">その他</label>
                            </div>
                        </div>
                    </div>
                    @if ($errors->has('sex'))
                        <div class="row mb-2">
                            <div class="col-md-2"></div>
                            <span class="text-danger">{{ $errors->first('sex') }}</span>
                        </div>
                    @endif
                </div>

                <div>
                    <div class="row mb-2">
                        <label for="address" class="col-md-2">住所</label>
                        <input type="text" id="address" name="address" class="form-control d-inline col-md-7" maxlength="50" required>
                    </div>
                    @if ($errors->has('address'))
                        <div class="row mb-2">
                            <div class="col-md-2"></div>
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                        </div>
                    @endif
                </div>

                <div>
                    <div class="row mb-2">
                        <label for="age" class="col-md-2">年齢</label>
                        <input type="number" id="age" name="age" class="form-control d-inline col-md-7" min="0" max="150" required>
                    </div>
                    @if ($errors->has('age'))
                        <div class="row mb-2">
                            <div class="col-md-2"></div>
                            <span class="text-danger">{{ $errors->first('age') }}</span>
                        </div>
                    @endif
                </div>

                <div>
                    <div class="row mb-2">
                        <label for="email" class="col-md-2">メールアドレス</label>
                        <input type="email" id="email" name="email" class="form-control d-inline col-md-7" maxlength="255" required>
                    </div>
                    @if ($errors->has('email'))
                        <div class="row mb-2">
                            <div class="col-md-2"></div>
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                    @endif
                </div>

                <div>
                    <div class="row mb-2">
                        <label class="col-md-2">アカウント種別</label>
                        <div class="col-md-7">
                            <div class="d-inline">
                                <input type="radio" name="type" id="admin" value="admin" checked required>
                                <label class="form-check-label" for="admin">管理者</label>
                            </div>
                            <div class="d-inline">
                                <input type="radio" name="type" id="employee" value="employee" required>
                                <label class="form-check-label" for="employee">従業員</label>
                            </div>
                        </div>
                    </div>
                    @if ($errors->has('type'))
                        <div class="row mb-2">
                            <div class="col-md-2"></div>
                            <span class="text-danger">{{ $errors->first('type') }}</span>
                        </div>
                    @endif
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">追加</button>
                </div>
            </form>
        </div>
        <div>
            <a href="{{ url('/admin/user/operate') }}">< 戻る</a>
        </div>
    </div>
@endsection