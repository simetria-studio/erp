@extends('layouts.painel')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="iq-card">
                        <div class="iq-card-header">
                            <div class="row pt-3">
                                <div class="col-6">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Liberar Acessos do Menu</h4>
                                    </div>
                                </div>
                                <div class="col-6 row justify-content-end">
                                    <div class="col-6">
                                        <select class="select2 form-control" id="select_user">
                                            <option value="">Selecione um Usuario</option>
                                            @foreach ($users as $user)
                                                @if ($user->id !== auth()->user()->id)
                                                    <option value="{{$user->id}}" @isset($user_id) @if($user->id == $user_id) selected @endif @endisset>{{$user->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="iq-card-body">
                            @if ($user_id)
                                <ul class="nav nav-pills mb-3 nav-fill" id="pills-tab-1" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-release-tab-fill" data-toggle="pill" href="#pills-release-fill" role="tab" aria-controls="pills-release" aria-selected="false">Não Liberados</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-note_released-tab-fill" data-toggle="pill" href="#pills-note_released-fill" role="tab" aria-controls="pills-note_released" aria-selected="false">Liberados</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent-1">
                                    <div class="tab-pane fade show active" id="pills-release-fill" role="tabpanel" aria-labelledby="pills-release-tab-fill">
                                        <form action="{{route('setting.admin.release_access')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="type" value="release">
                                            <input type="hidden" name="user_id" value="{{$user_id}}">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-light">
                                                                <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                                                                    <div class="custom-switch-inner">
                                                                        <input type="checkbox" class="custom-control-input bg-success check-all" data-column=".column-1" id="release_check-all">
                                                                        <label class="custom-control-label" for="release_check-all">
                                                                            <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                                                                            <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                Liberar
                                                            </th>
                                                            <th class="text-light">
                                                                <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                                                                    <div class="custom-switch-inner">
                                                                        <input type="checkbox" class="custom-control-input bg-success check-all" data-column=".column-2" id="save_check-all">
                                                                        <label class="custom-control-label" for="save_check-all">
                                                                            <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                                                                            <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                Salvar
                                                            </th>
                                                            <th class="text-light">
                                                                <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                                                                    <div class="custom-switch-inner">
                                                                        <input type="checkbox" class="custom-control-input bg-success check-all" data-column=".column-3" id="change_check-all">
                                                                        <label class="custom-control-label" for="change_check-all">
                                                                            <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                                                                            <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                Alterar
                                                            </th>
                                                            <th class="text-light">
                                                                <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                                                                    <div class="custom-switch-inner">
                                                                        <input type="checkbox" class="custom-control-input bg-success check-all" data-column=".column-4" id="delete_check-all">
                                                                        <label class="custom-control-label" for="delete_check-all">
                                                                            <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                                                                            <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                Apagar
                                                            </th>
                                                            <th class="text-light">Acesso Principal</th>
                                                            <th class="text-light">Modulo</th>
                                                            <th class="text-light">Programa</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($programs as $program)
                                                            <tr>
                                                                <td class="text-light column-1">
                                                                    <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                                                                        <div class="custom-switch-inner">
                                                                            <input type="checkbox" name="release[{{$program->id}}][release]" class="custom-control-input bg-success" id="release_check-{{$program->id}}">
                                                                            <label class="custom-control-label" for="release_check-{{$program->id}}">
                                                                                <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                                                                                <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-light column-2">
                                                                    <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                                                                        <div class="custom-switch-inner">
                                                                            <input type="checkbox" name="release[{{$program->id}}][save]" class="custom-control-input bg-success" id="save_check-{{$program->id}}">
                                                                            <label class="custom-control-label" for="save_check-{{$program->id}}">
                                                                                <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                                                                                <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-light column-3">
                                                                    <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                                                                        <div class="custom-switch-inner">
                                                                            <input type="checkbox" name="release[{{$program->id}}][change]" class="custom-control-input bg-success" id="change_check-{{$program->id}}">
                                                                            <label class="custom-control-label" for="change_check-{{$program->id}}">
                                                                                <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                                                                                <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-light column-4">
                                                                    <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                                                                        <div class="custom-switch-inner">
                                                                            <input type="checkbox" name="release[{{$program->id}}][delete]" class="custom-control-input bg-success" id="delete_check-{{$program->id}}">
                                                                            <label class="custom-control-label" for="delete_check-{{$program->id}}">
                                                                                <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                                                                                <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-light">
                                                                    {{$program->mainAccess->menu_name}}
                                                                    <input type="hidden" name="release[{{$program->id}}][main_access_id]" value="{{$program->main_access_id}}">
                                                                </td>
                                                                <td class="text-light">
                                                                    {{$program->module->module_name}}
                                                                    <input type="hidden" name="release[{{$program->id}}][module_id]" value="{{$program->module_id}}">
                                                                </td>
                                                                <td class="text-light">
                                                                    <input type="hidden" name="release[{{$program->id}}][program_id]" value="{{$program->id}}">
                                                                    {{$program->program_name}}
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-12 col-md-6">
                                                    <button type="submit" class="btn btn-block btn-primary"><i></i> Gravar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-pane fade" id="pills-note_released-fill" role="tabpanel" aria-labelledby="pills-profile-tab-fill">
                                        <form action="{{route('setting.admin.release_access')}}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="type" value="remove">
                                            <input type="hidden" name="user_id" value="{{$user_id}}">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-light">
                                                                <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                                                                    <div class="custom-switch-inner">
                                                                        <input type="checkbox" class="custom-control-input bg-success check-all" data-column=".column-1" id="remove_check-all">
                                                                        <label class="custom-control-label" for="remove_check-all">
                                                                            <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                                                                            <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                Retirar
                                                            </th>
                                                            <th class="text-light">
                                                                <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                                                                    <div class="custom-switch-inner">
                                                                        <input type="checkbox" class="custom-control-input bg-success check-all" data-column=".column-2" id="save_check-edit-all">
                                                                        <label class="custom-control-label" for="save_check-edit-all">
                                                                            <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                                                                            <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                Salvar
                                                            </th>
                                                            <th class="text-light">
                                                                <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                                                                    <div class="custom-switch-inner">
                                                                        <input type="checkbox" class="custom-control-input bg-success check-all" data-column=".column-3" id="change_check-edit-all">
                                                                        <label class="custom-control-label" for="change_check-edit-all">
                                                                            <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                                                                            <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                Alterar
                                                            </th>
                                                            <th class="text-light">
                                                                <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                                                                    <div class="custom-switch-inner">
                                                                        <input type="checkbox" class="custom-control-input bg-success check-all" data-column=".column-4" id="delete_check-edit-all">
                                                                        <label class="custom-control-label" for="delete_check-edit-all">
                                                                            <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                                                                            <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                Apagar
                                                            </th>
                                                            <th class="text-light">Acesso Principal</th>
                                                            <th class="text-light">Modulo</th>
                                                            <th class="text-light">Programa</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($menu_accesses as $menu_access)
                                                            <tr>
                                                                <td class="text-light column-1">
                                                                    <input type="hidden" name="remove[{{$menu_access->id}}][id]" value="{{$menu_access->id}}">
                                                                    <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                                                                        <div class="custom-switch-inner">
                                                                            <input type="checkbox" name="remove[{{$menu_access->id}}][remove]" class="custom-control-input bg-success" id="remove_check-{{$menu_access->program_id}}">
                                                                            <label class="custom-control-label" for="remove_check-{{$menu_access->program_id}}">
                                                                                <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                                                                                <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-light column-2">
                                                                    <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                                                                        <div class="custom-switch-inner">
                                                                            <input type="checkbox" name="remove[{{$menu_access->id}}][save]" class="custom-control-input bg-success" @if($menu_access->save_option == 'true') checked @endif id="save_check-{{$menu_access->program_id}}">
                                                                            <label class="custom-control-label" for="save_check-{{$menu_access->program_id}}">
                                                                                <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                                                                                <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-light column-3">
                                                                    <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                                                                        <div class="custom-switch-inner">
                                                                            <input type="checkbox" name="remove[{{$menu_access->id}}][change]" class="custom-control-input bg-success" @if($menu_access->change_option == 'true') checked @endif id="change_check-{{$menu_access->program_id}}">
                                                                            <label class="custom-control-label" for="change_check-{{$menu_access->program_id}}">
                                                                                <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                                                                                <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-light column-4">
                                                                    <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                                                                        <div class="custom-switch-inner">
                                                                            <input type="checkbox" name="remove[{{$menu_access->id}}][delete]" class="custom-control-input bg-success" @if($menu_access->delete_option == 'true') checked @endif id="delete_check-{{$menu_access->program_id}}">
                                                                            <label class="custom-control-label" for="delete_check-{{$menu_access->program_id}}">
                                                                                <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                                                                                <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-light">
                                                                    {{$menu_access->mainAccess->menu_name}}
                                                                    <input type="hidden" name="remove[{{$menu_access->id}}][main_access_id]" value="{{$menu_access->main_access_id}}">
                                                                </td>
                                                                <td class="text-light">
                                                                    {{$menu_access->module->module_name}}
                                                                    <input type="hidden" name="remove[{{$menu_access->id}}][module_id]" value="{{$menu_access->module_id}}">
                                                                </td>
                                                                <td class="text-light">
                                                                    <input type="hidden" name="remove[{{$menu_access->id}}][program_id]" value="{{$menu_access->id}}">
                                                                    {{$menu_access->program_name}}
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-12 col-md-6">
                                                    <button type="submit" class="btn btn-block btn-primary"><i></i> Gravar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @else
                                <h4>Selecione um Usuario para alteração!</h4>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#select_user').on('change', function() {
                window.location.href = "{{route('setting.admin.release_access')}}"+'/'+$(this).val();
            });
        });
    </script>
@endsection