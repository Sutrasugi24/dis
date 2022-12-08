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
                            <label for="nama" class="form-label">Nama</label>
                            <input id="nama" type="text" class="form-control" placeholder="nama">
                        </div>
                        <div class="mt-3">
                            <label for="nis" class="form-label">Nomor Induk Siswa</label>
                            <input id="nis" type="text" class="form-control" placeholder="secret">
                        </div>
                        <div class="mt-3">
                            <label for="nisn" class="form-label">Nomor Induk Siswa Nasional</label>
                            <input id="nisn" type="text" class="form-control" placeholder="secret">
                        </div>
                        <div class="mt-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <input id="kelas" type="text" class="form-control" placeholder="secret">
                        </div>
                        <div class="mt-3">
                            <label for="tahun" class="form-label">Tahun</label>
                            <input id="tahun" type="text" class="form-control" placeholder="secret">
                        </div>
                        <div class="mt-3">
                            <label for="ijazah" class="form-label">Ijazah</label>
                            <input id="ijazah" type="text" class="form-control" placeholder="secret">
                        </div>
                        <br/>
                        <div class='mb-4'>
                            <label for="skhun" class="form-label">SKHUN</label>
                            <input id="skhun" type="text" class="form-control" placeholder="secret">
                        </div>

                        <div class="mb-2">
                            <div class="form-group mb-0">
                                <label for="status">Status</label>
                            </div>
                            <div class="form-check inline-block">
                                <input type="radio" name="status" class="form-check-input" value="active" id="active">
                                <label for="active" class="form-check-label">Active</label>
                            </div>
                            <div class="form-check inline-block">
                                <input type="radio" name="status" class="form-check-input" value="inactive" id="inactive">
                                <label for="inactive" class="form-check-label">Inactive</label>
                            </div>
                        </div>
                        <br/>
                        <div class="form-group">
                            <button type="button" onClick="window.history.back()" class="btn btn-secondary w-24 mr-1 mb-2">Cancel</button>
                            <button type="submit" class="btn btn-primary w-24 mr-1 mb-2 ">Submit</button>
                        </div>
                </div>
            </div>
            <!-- END: Input -->
    </div>
@endsection
