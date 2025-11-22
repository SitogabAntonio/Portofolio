@extends('layouts.app')

@section('content')

<!-- HERO -->
<section id="home" style="min-height:100vh; display:flex; align-items:center; padding-top:100px;">
    <div class="container">
        <h1 class="text-holo" style="font-size:5rem; font-weight:900; margin-bottom:1rem;">
            Halo, Saya <span style="color:#a855f7;">Sitogab Antonio</span>
        </h1>
        <p style="font-size:2.2rem; color:#c4b5fd; margin:1rem 0 1.5rem;">
            Web Developer • Backend (PHP / Java)
        </p>
        <p style="font-size:1.3rem; color:#ccc; max-width:700px; margin-bottom:3rem;">
            Membuat website modern, scalable, dan maintainable.
        </p>
        <!-- VERSI PALING RAPI & SEJAJAR 100% -->
        <div class="hero-buttons">
            <button id="openCV" class="btn magnetic">Lihat CV Saya</button>
            <a href="#projects" class="btn magnetic btn-secondary">Lihat Proyek</a>
        </div>
    </div>
</section>

<!-- ABOUT ME – FOTO KIRI, DETAIL KANAN -->
<section id="about" style="padding:120px 0;">
    <div class="container">
        <h2 class="text-holo" style="font-size:3.8rem; text-align:center; margin-bottom:5rem;">TENTANG SAYA</h2>

        <div
            style="display:grid; grid-template-columns:340px 1fr; gap:5rem; align-items:start; max-width:1200px; margin:0 auto;">
            <img src="{{ asset('assets/img/profill2.jpg') }}" alt="Sitogab Antonio"
                style="width:340px; height:400px; object-fit:cover; border-radius:24px; border:4px solid #a855f7; box-shadow:0 0 80px rgba(168,85,247,.7);">

            <div>
                <p style="font-size:1.2rem; margin-bottom:2rem; color:#ddd; line-height:1.8;">
                    Sebagai lulusan <strong>Sistem Informasi</strong> <strong>Institut Teknologi Del</strong>, saya
                    adalah developer yang memiliki fondasi kuat di bidang backend development dan integrasi sistem,
                    mahir dalam <strong>Java Spring Boot</strong>, <strong>PHP Laravel</strong>, dan
                    <strong>Python</strong>, serta memiliki pemahaman yang solid tentang Database Relasional
                    <strong>(SQL)</strong>.
                </p>

                <div style="display:flex; flex-wrap:wrap; gap:0.9rem; margin-top:2rem;">
                    <span class="skill-tag">Java</span>
                    <span class="skill-tag">PHP</span>
                    <span class="skill-tag">Python</span>
                    <span class="skill-tag">Spring Boot</span>
                    <span class="skill-tag">Laravel</span>
                    <span class="skill-tag">MySQL</span>
                    <span class="skill-tag">Bootstrap</span>
                    <span class="skill-tag">Tailwind</span>
                    <span class="skill-tag">Figma</span>
                    <span class="skill-tag">Tableau</span>
                    <span class="skill-tag">Postman</span>
                    <span class="skill-tag">Git</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PENGALAMAN KERJA – TIMELINE CANTIK -->
<section id="experience" style="padding:140px 0; background:rgba(15,15,35,0.4);">
    <div class="container">
        <h2 class="text-holo" style="font-size:3.8rem; text-align:center; margin-bottom:6rem;">
            PENGALAMAN KERJA / ORGANISASI
        </h2>

        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-date">Jun – Des 2024</div>
                <div class="timeline-content">
                    <h3>Backend Developer Intern</h3>
                    <h4>PT. Riset Perkebunan Nusantara</h4>
                    <p>Membangun sistem kontrak digital berbasis CodeIgniter 4 dengan workflow approval multi-level dan
                        integrasi API eksternal.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date">Jan – Mei 2024</div>
                <div class="timeline-content">
                    <h3>Fullstack Developer (PKM)</h3>
                    <h4>GKII Church Information System</h4>
                    <p>Laravel + Flutter (Kotlin) – Sistem informasi jemaat, keuangan, jadwal ibadah, dan dashboard
                        admin.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date">2023 – 2024</div>
                <div class="timeline-content">
                    <h3>Kepala Bidang Humas & Pengabdian Kepada Masyarakat</h3>
                    <h4>Badan Eksekutif Mahasiswa (BEM) IT Del</h4>
                    <p>Mengkordinasikan kegiatan peduli lingkungan dan pengabdian kepada masyarakat</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date">Jan – Mei 2024</div>
                <div class="timeline-content">
                    <h3>Wakil Kepala Bidang Humas & Pengabdian Kepada Masyarakat</h3>
                    <h4>Badan Eksekutif Mahasiswa (BEM) IT Del</h4>
                    <p>Membantu kepala departemen dalam mengkordinasikan kegiatan peduli lingkungan dan pengabdian
                        kepada masyarakat</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date">2023 – 2024</div>
                <div class="timeline-content">
                    <h3>Asisten Dosen Pemrograman Prosedural (C Language)</h3>
                    <h4>Intitut Teknologi Del</h4>
                    <p>Membantu Dosen dalam hal praktikum C Programming</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date">Jan – Mei 2024</div>
                <div class="timeline-content">
                    <h3>Asisten Dosen Matematika Diskrit</h3>
                    <h4>Intitut Teknologi Del</h4>
                    <p>Membantu Dosen dalam hal latihan Matdis</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date">2023 – 2024</div>
                <div class="timeline-content">
                    <h3>Asisten Pembicara "Penulisan Karya Tulis Ilmiah dan Analisis Data"</h3>
                    <h4>SMK Swasta Arjuna Laguboti (PKM)</h4>
                    <p>Membantu Dosen seminar tata cara penulisan KTI dan analisis data statistik</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROYEK — 100% KEMBALI SEPERTI SEMULA -->
<section id="projects" style="padding:120px 0; background:rgba(15,15,35,0.4);">
    <div class="container">
        <h2 class="text-holo" style="font-size:3.8rem; text-align:center; margin-bottom:5rem;">
            PROYEK
        </h2>

        <div class="projects-grid">
            <div class="project-card magnetic">
                <img src="{{ asset('assets/img/ahasian.png') }}" alt="E-Commerce">
                <div class="project-info">
                    <h3>Water Transaction Monitoring</h3>
                    <p>Java | Springboot | Hibernate | Dashboard Admin</p>
                </div>
            </div>

            <div class="project-card magnetic">
                <img src="{{ asset('assets/img/sdv.png') }}" alt="Company Profile">
                <div class="project-info">
                    <h3>Generate New Variance Motif Ulos</h3>
                    <p>Python | Tensorflow | U-Net | Diffusion</p>
                </div>
            </div>

            <div class="project-card magnetic">
                <img src="{{ asset('assets/img/rpn.png') }}" alt="Dashboard">
                <div class="project-info">
                    <h3>Digital Contract Website PT RPN</h3>
                    <p>PHP | CodeIgniter4 | API | Workflow</p>
                </div>
            </div>

            <div class="project-card magnetic">
                <img src="{{ asset('assets/img/gkii.png') }}" alt="SaaS Landing">
                <div class="project-info">
                    <h3>GKII Church Information System</h3>
                    <p>PHP | Laravel | Kotlin | Flutter</p>
                </div>
            </div>

            <div class="project-card magnetic">
                <img src="{{ asset('assets/img/hobby.png') }}" alt="Blog">
                <div class="project-info">
                    <h3>Meet Hobby</h3>
                    <p>PHP | Laravel | NodeJS | Vite | Chat Room</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERTIFIKAT — 100% KEMBALI SEPERTI SEMULA -->
<section id="certificates" style="padding:120px 0; background:rgba(20,10,40,0.3);">
    <div class="container">
        <h2 class="text-holo" style="font-size:3.8rem; text-align:center; margin-bottom:5rem;">
            SERTIFIKAT
        </h2>

        <div class="projects-grid">
            <div class="project-card magnetic flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="{{ asset('assets/img/alibaba.png') }}" alt="Alibaba">
                    </div>
                    <div class="flip-card-back">
                        <h3>Data Analysis Speciality</h3>
                        <p>2025 • Alibaba Cloud Academy</p>
                    </div>
                </div>
            </div>

            <div class="project-card magnetic flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="{{ asset('assets/img/kp.png') }}" alt="KP">
                    </div>
                    <div class="flip-card-back">
                        <h3>Backend Intern</h3>
                        <p>2024 • PT. Riset Perkebunan Nusantara</p>
                    </div>
                </div>
            </div>

            <div class="project-card magnetic flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="{{ asset('assets/img/pkm.png') }}" alt="PKM">
                    </div>
                    <div class="flip-card-back">
                        <h3>Community Service</h3>
                        <p>2023 • Del Institute of Technology</p>
                    </div>
                </div>
            </div>

            <div class="project-card magnetic flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="{{ asset('assets/img/training.png') }}" alt="Training">
                    </div>
                    <div class="flip-card-back">
                        <h3>Training AI & CyberSecurity</h3>
                        <p>2025 • Skylab ASIX</p>
                    </div>
                </div>
            </div>

            <div class="project-card magnetic flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="{{ asset('assets/img/wakil.png') }}" alt="Wakil">
                    </div>
                    <div class="flip-card-back">
                        <h3>Deputy Head of Public Relations</h3>
                        <p>2023 • Del Institute of Technology</p>
                    </div>
                </div>
            </div>

            <div class="project-card magnetic flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="{{ asset('assets/img/wakil.png') }}" alt="Wakil">
                    </div>
                    <div class="flip-card-back">
                        <h3>Head of Public Relations</h3>
                        <p>2024 • Del Institute of Technology</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BEHIND THE SCENE – HANYA 2 FOTO, SAMA BESAR, CANTIK -->
<section id="documentation" style="padding:120px 0;">
    <div class="container">
        <h2 class="text-holo" style="font-size:3.8rem; text-align:center; margin-bottom:5rem;">
            DOKUMENTASI
        </h2>

        <div style="display:grid; grid-template-columns:1fr 1fr; gap:3rem; max-width:1100px; margin:0 auto;">
            <img src="{{ asset('assets/img/rpn2.png') }}" alt="BTS 1"
                style="width:100%; height:520px; object-fit:cover; border-radius:28px; box-shadow:0 25px 70px rgba(168,85,247,0.5);"
                class="magnetic">
            <img src="{{ asset('assets/img/prd.png') }}" alt="BTS 2"
                style="width:100%; height:520px; object-fit:cover; border-radius:28px; box-shadow:0 25px 70px rgba(168,85,247,0.5);"
                class="magnetic">
        </div>
    </div>
</section>

<!-- CONTACT ME -->
<section id="contact" style="padding:140px 0; background:rgba(10,10,30,0.8); text-align:center;">
    <div class="container">
        <h2 class="text-holo" style="font-size:4.2rem; margin-bottom:4rem;">
            HUBUNGI SAYA
        </h2>

        <div style="max-width:700px; margin:0 auto;">
            <p style="font-size:1.6rem; color:#ddd; margin-bottom:3rem;">
                Tertarik bekerja sama atau sekedar ngobrol tentang project?
                <br>Silakan hubungi saya kapan saja!
            </p>

            <!-- EMAIL -->
            <a href="mailto:niogirsang22@gmail.com" class="contact-btn magnetic">
                <svg style="width:28px; margin-right:12px;" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
                niogirsang22@gmail.com
            </a>

            <!-- WHATSAPP -->
            <a href="https://wa.me/6282297422654" target="_blank" class="contact-btn magnetic"
                style="background:rgba(37,211,102,0.15); border-color:#25d366; margin-top:1.5rem;">
                <svg style="width:28px; margin-right:12px;" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.52.149-.174.198-.298.297-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.262c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.088z" />
                </svg>
                +62 822-9742-2654
            </a>
        </div>
    </div>
</section>

@endsection