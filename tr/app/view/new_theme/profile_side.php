<div class="filter bg-header mb-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-white bg-header-content rounded py-5 px-4">
                    <div class="d-flex flex-column">
                        <div class="avatar bg-light w-128 mx-auto" style="background-image: url(https://randomuser.me/api/portraits/women/21.jpg);"></div>
                        <div class="flex-fill mt-5 text-center">
                            <div class="text-24 font-weight-bold"><?= ucwords($user['uname']. ' ' . $user['surname']) ?></div>
                        </div>
                    </div>
                    <div class="px-4">
                        <div class="d-block mt-3 pt-2 px-3 text-12">
                            <div class="d-flex justify-content-between py-1">
                                <div class="text-muted">Kredi</div>
                                <div class="font-weight-bold text-primary"><?= $user['credit'] ?></div>
                            </div>
                            <div class="d-flex justify-content-between py-1">
                                <div class="text-muted">E-Mail</div>
                                <div class="font-weight-bold text-dark text-14"><?= $user['email'] ?></div>
                            </div>
                            <div class="d-flex justify-content-between py-1">
                                <div class="text-muted">Telefon Numarası</div>
                                <div class="font-weight-bold text-success"><?= $user['phone_no'] ?></div>
                            </div>
                            <div class="d-flex justify-content-between py-1">
                                <div class="text-muted">Ne zamandır fallaşıyorsunuz</div>
                                <div class="font-weight-bold text-dark"><?= $user['date'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  sidebar  -->

