    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header no-gutters">
            <div class="d-md-flex align-items-md-center justify-content-between">
                <div class="media m-v-10 align-items-center">
                    <div class="avatar avatar-image avatar-lg">
                        <img src="assets/images/avatars/thumb-3.jpg" alt="">
                    </div>
                    <div class="media-body m-l-15">
                        <h4 class="m-b-0">Bem-Vindo(a), <?= $_SESSION['userName']; ?></h4>
                        <span class="text-gray">Função do usuário</span>
                    </div>
                </div>
                <div class="d-md-flex align-items-center d-none">
                    <div class="media align-items-center m-r-40 m-v-5">
                        <!--<div class="font-size-27">
                                        <i class="text-primary anticon anticon-profile"></i>
                                    </div>

                                   <div class="d-flex align-items-center m-l-10">
                                        <h2 class="m-b-0 m-r-5">78</h2>
                                        <span class="text-gray">Tarefas</span>
                                    </div>-->
                    </div>
                    <div class="media align-items-center m-r-40 m-v-5">
                        <div class="font-size-27">
                            <i class="text-success  anticon anticon-appstore"></i>
                        </div>
                        <div class="d-flex align-items-center m-l-10">
                            <h2 class="m-b-0 m-r-5">21</h2>
                            <span class="text-gray">Documentos</span>
                        </div>
                    </div>
                    <!-- <div class="media align-items-center m-v-5">
                        <div class="font-size-27">
                            <i class="text-danger anticon anticon-team"></i>
                        </div>
                        <div class="d-flex align-items-center m-l-10">
                            <h2 class="m-b-0 m-r-5">39</h2>
                            <span class="text-gray">Clientes</span>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Receber Documento </h5>
                            <div class="dropdown dropdown-animated scale-left">
                                <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                    <i class="anticon anticon-ellipsis"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item" type="button">
                                        <i class="anticon anticon-printer"></i>
                                        <span class="m-l-10">Print</span>
                                    </button>
                                    <button class="dropdown-item" type="button">
                                        <i class="anticon anticon-download"></i>
                                        <span class="m-l-10">Download</span>
                                    </button>
                                    <button class="dropdown-item" type="button">
                                        <i class="anticon anticon-file-excel"></i>
                                        <span class="m-l-10">Export</span>
                                    </button>
                                    <button class="dropdown-item" type="button">
                                        <i class="anticon anticon-reload"></i>
                                        <span class="m-l-10">Refresh</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr class="" />
                        <div class="">
                            <form class="g-3 needs-validation" novalidate>

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="validationCustom01" class="form-label">Número do Protocolo</label>
                                        <input type="text" disabled class="form-control" id="validationCustom01" value="<?= date("Ymd", time()) . str_pad('1', 4, "0", STR_PAD_LEFT); ?>" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="validationCustom02" class="form-label">Origem do Documento</label>
                                        <select id="inputState" class="form-control" required>
                                            <option value="" disabled selected>Choose...</option>
                                            <option value="SEGOV">SEGOV - SECRETARIA DE GOVERNO </option>
                                            <option value="PGM">PGM - PROCURADORIA GERAL DO MUNICÍPIO </option>
                                            <option value="CGM">CGM - CONTROLADORIA GERAL DO MUNICÍPIO </option>
                                            <option value="SEPLAG">SEPLAG - SECRETARIA DE PLANEJAMENTO E GESTÃO </option>
                                            <option value="SEURB">SEURB - SECRETARIA DE OBRAS E URBANISMO </option>
                                            <option value="SEINFRA">SEINFRA - SECRETARIA DE INFRAESTRUTURA E SERVIÇOS PÚBLICOS</option>
                                            <option value="SEMARH">SEMARH - SECRETARIA DE MEIO-AMBIENTEE RECURSOS HÍDRICOS</option>
                                            <option value="SDE">SDE - SECRETARIA DE DESENVOLVIMENTO ECONÔMICO</option>
                                            <option value="SEDUC">SEDUC - SECRETARIA DE EDUCAÇÃO</option>
                                            <option value="SESA">SESA - SECRETARIA DE SAÚDE</option>
                                            <option value="STDSMDH"> SECRETARIA DO TRABALHO, DESENVOLVIMENTO SOCIAL, MULHERES E DIREITOS HUMANOS</option>
                                            <option value="SDA">SDA - SECRETARIA DO DESENVOLVIMENTO AGRÁRIO</option>
                                            <option value="SECULT">SECULT - SECRETARIA DE CULTURA E TURISMO</option>
                                            <option value="SECULT">SECULT - SECRETARIA DE JUVENTUDE E ESPORTES</option>
                                            <option value="OUTROS">OUTROS </option>

                                        </select>
                                        <!-- <input type="text" class="form-control" id="validationCustom02" value="Otto" required> -->
                                        <div class="invalid-feedback">
                                            obrigatorio !
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationCustomUsername" class="form-label">Username</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom03" class="form-label">City</label>
                                    <input type="text" class="form-control" id="validationCustom03" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for="validationCustom05" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="validationCustom05" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid zip.
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                        <label class="form-check-label" for="invalidCheck">
                                            Agree to terms and conditions
                                        </label>
                                        <div class="invalid-feedback">
                                            You must agree before submitting.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </form>
                        </div>
                        <!-- <div class="d-md-flex justify-content-space m-t-50">
                            <div class="completion-chart p-r-10">
                                <canvas class="chart" id="completion-chart"></canvas>
                            </div>
                            <div class="calendar-card border-0">
                                <div data-provide="datepicker-inline"></div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Wrapper END -->
