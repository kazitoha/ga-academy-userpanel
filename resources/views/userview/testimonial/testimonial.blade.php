@extends('userview/layout/navbar')

@section('userview-navbar')
    <!-- ======home and banner section start======= -->
    <section id="Notice-view-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

                </div>
            </div>
        </div>
    </section>
    <!-- ======home and banner section finish======= -->

    <!-- ==========Welcome to the University of Dhaka start====== -->
    <section id="welcome-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row pt-3">
                        <div class="col-lg-12" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);"><br>
                            <h2 class="text-center tex-danger">Online Apply For Testimonial</h2>
                            <hr>

                            @if (session('success_msg'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success_msg') }}
                                </div>
                            @endif

                            <form class="pt-4" action="{{ route('apply.for.testimonial') }}">
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label text-dark" for="form6Example1">Student Full Name In
                                                English <b class="text-danger">*</b> </label>
                                            <input type="text" value="{{ old('student_name') }}" name="student_name"
                                                id="form6Example1"
                                                class="form-control @error('student_name')is-invalid @enderror" required />
                                            @error('student_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label text-dark" for="form6Example2">Student Full Name In
                                                Bangla <b class="text-danger">*</b></label>
                                            <input type="text" value="{{ old('student_name_bd') }}"
                                                name="student_name_bd" id="form6Example2"
                                                class="form-control @error('student_name_bd')is-invalid @enderror"
                                                required />
                                            @error('student_name_bd')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label text-dark" for="form6Example1">Father Full Name In
                                                English <b class="text-danger">*</b></label>
                                            <input type="text" value="{{ old('father_name') }} " name="father_name"
                                                id="form6Example1"
                                                class="form-control @error('father_name')is-invalid @enderror" required />
                                            @error('father_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label text-dark" for="form6Example2">Father Full Name In
                                                Bangla <b class="text-danger">*</b></label>
                                            <input type="text" value="{{ old('father_name_bd') }} " name="father_name_bd"
                                                id="form6Example2"
                                                class="form-control @error('father_name_bd')is-invalid @enderror"
                                                required />
                                            @error('father_name_bd')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label text-dark" for="form6Example1">Mother Full Name In
                                                English <b class="text-danger">*</b></label>
                                            <input type="text" value="{{ old('mother_name') }}" name="mother_name"
                                                id="form6Example1"
                                                class="form-control  @error('mother_name')is-invalid @enderror" required />
                                            @error('mother_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label text-dark" for="form6Example2">Mother Full Name In
                                                Bangla <b class="text-danger">*</b></label>
                                            <input type="text" value="{{ old('mother_name_bd') }} "
                                                name="mother_name_bd" id="form6Example2"
                                                class="form-control @error('mother_name_bd')is-invalid @enderror"
                                                required />
                                            @error('mother_name_bd')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label text-dark" for="form6Example1">Exam Name <b
                                                    class="text-danger">*</b></label>

                                            <select class="form-control @error('exam_name')is-invalid @enderror"
                                                name="exam_name" aria-label="Default select example">
                                                <option selected disabled>Open this select menu</option>
                                                <option value="1">J.S.C</option>
                                                <option value="2">S.S.C</option>
                                            </select>
                                            @error('exam_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label text-dark" for="form6Example2">Exam Year <b
                                                    class="text-danger">*</b></label>
                                            <input type="number" min="1930" max="{{ date('Y') }}"
                                                step="1" value="{{ old('exam_year') }} " name="exam_year"
                                                id="form6Example2"
                                                class="form-control @error('exam_year')is-invalid @enderror" required />
                                            @error('exam_year')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label text-dark" for="form6Example2">Group <b
                                                    class="text-danger">*</b></label>
                                            <select class="form-control @error('group')is-invalid @enderror"
                                                name="group" aria-label="Default select example">
                                                <option selected disabled>Open this select menu</option>
                                                <option value="1">Science</option>
                                                <option value="2">Commerce</option>
                                                <option value="3">Arts</option>
                                            </select>
                                            @error('group')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label text-dark" for="form6Example1">Board Roll <b
                                                    class="text-danger">*</b></label>
                                            <input type="number" value="{{ old('board_roll') }}" name="board_roll"
                                                id="form6Example1"
                                                class="form-control @error('board_roll')is-invalid @enderror" required />
                                            @error('board_roll')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label text-dark" for="form6Example2">Board Reg. <b
                                                    class="text-danger">*</b></label>
                                            <input type="number" value="{{ old('board_reg') }}" name="board_reg"
                                                id="form6Example2"
                                                class="form-control @error('board_reg')is-invalid @enderror" required />
                                            @error('board_reg')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label text-dark" for="form6Example2">Session <b
                                                    class="text-danger">*</b></label>
                                            <input type="text" value="{{ old('session') }}" name="session"
                                                id="form6Example2"
                                                class="form-control @error('session')is-invalid @enderror" required />
                                            @error('session')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label text-dark" for="form6Example2">Exam Centre <b
                                                    class="text-danger">*</b></label>
                                            <input type="text" value="{{ old('exam_centre') }}" name="exam_centre"
                                                id="form6Example2"
                                                class="form-control @error('exam_centre')is-invalid @enderror" required />
                                            @error('exam_centre')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label text-dark" for="form6Example2">Exam Centre Code <b
                                                    class="text-danger">*</b></label>
                                            <input type="text" value="{{ old('exam_centre_code') }}"
                                                name="exam_centre_code" id="form6Example2"
                                                class="form-control @error('exam_centre_code')is-invalid @enderror"
                                                required />
                                            @error('exam_centre_code')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label text-dark" for="form6Example1">GPA <b
                                                    class="text-danger">*</b></label>
                                            <input type="number" max="5.00" step="0.1"
                                                value="{{ old('gpa') }}" name="gpa" id="form6Example1"
                                                pattern="[0-9]*[.,]?[0-9]*"
                                                class="form-control @error('gpa')is-invalid @enderror" required />
                                            @error('gpa')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label text-dark" for="form6Example6">Date Of Birth <b
                                            class="text-danger">*</b></label>
                                    <input type="date" value="{{ old('date_of_birth') }}" name="date_of_birth"
                                        id="form6Example6"
                                        class="form-control @error('date_of_birth')is-invalid @enderror" required />
                                    @error('date_of_birth')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Submit button -->
                                <div class="text-center">
                                    <button type="submit" style="text-align: center" class="welcome-btn  mb-4">Apply For
                                        Testimonial</button>
                                </div>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
