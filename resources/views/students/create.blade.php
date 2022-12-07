@extends('../layout/' . $layout)

@section('subhead')
    <title>SMAN 6 Cimahi</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-12">
        <h2 class="text-lg font-medium mr-auto">Regular Form</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Input -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Student</h2>
                </div>
                <div id="input" class="p-5">
                    <div class="preview">
                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Nama</label>
                            <input id="vertical-form-2" type="text" class="form-control" placeholder="secret">
                        </div>
                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Nomor Induk Siswa</label>
                            <input id="vertical-form-2" type="text" class="form-control" placeholder="secret">
                        </div>
                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Nomor Induk Siswa Nasional</label>
                            <input id="vertical-form-2" type="text" class="form-control" placeholder="secret">
                        </div>
                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Kelas</label>
                            <input id="vertical-form-2" type="text" class="form-control" placeholder="secret">
                        </div>
                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Tahun</label>
                            <input id="vertical-form-2" type="text" class="form-control" placeholder="secret">
                        </div>
                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Ijazah</label>
                            <input id="vertical-form-2" type="text" class="form-control" placeholder="secret">
                        </div>
                        <br/>
                        <div class='mt3'>
                            <label for="regular-form-1" class="form-label">SKHUN</label>
                            <input id="regular-form-1" type="text" class="form-control" placeholder="Input text">
                        </div>
                        <div class="form-inline mt-5">
                            <label for="horizontal-form-2" class="form-label sm:w-20">Password</label>
                            <input id="horizontal-form-2" type="password" class="form-control" placeholder="secret">
                        </div>
                </div>
            </div>
            <!-- END: Input -->
    </div>
@endsection
