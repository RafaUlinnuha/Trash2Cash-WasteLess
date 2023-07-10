@extends('layouts.base')
 
@section('title', 'Artikel Elektronik | ')
 
@section('content')
    <x-artikel 
        title="Dampak Sampah Elektronik dan Tantangan Pengelolaannya dalam Era Digital">
        <p>Sampah elektronik merupakan limbah yang berasal dari peralatan elektronik yang tidak lagi digunakan atau rusak. Dalam artikel ini, kami membahas mengenai pertumbuhan jumlah sampah elektronik, dampak negatifnya, dan tantangan dalam pengelolaan limbah elektronik.</p>
        <br>
        <h2 class="text-lg font-semibold">Dampak Negatif Sampah Elektronik</h2>
        Sampah elektronik mengandung bahan berbahaya seperti logam berat dan bahan kimia yang dapat mencemari lingkungan dan berdampak buruk pada kesehatan manusia. Beberapa dampak negatif sampah elektronik meliputi:
        <ol class="pl-5">
            <li class="list-decimal list-inside"><span class="font-medium">Pencemaran tanah dan air:</span> Bahan berbahaya dalam sampah elektronik dapat merembes ke tanah dan air, mencemari ekosistem alami dan sumber air.</li>
            <li class="list-decimal list-inside"><span class="font-medium">Pencemaran udara:</span> Pembakaran sampah elektronik yang tidak terkelola dengan baik dapat menghasilkan emisi beracun yang mencemari udara.</li>
            <li class="list-decimal list-inside"><span class="font-medium">Kesehatan manusia:</span> Paparan bahan berbahaya dalam e-waste dapat menyebabkan berbagai masalah kesehatan, termasuk gangguan hormonal, kerusakan saraf, dan kanker.</li>
        </ol>

        <br>
        <h2 class="text-lg font-semibold">Tantangan Pengelolaan Sampah Elektronik</h2>
        Pengelolaan sampah elektronik dihadapkan pada beberapa tantangan, antara lain:
        <ol class="pl-5">
            <li class="list-decimal list-inside"><span class="font-medium">Pertumbuhan volume e-waste:</span> Perkembangan teknologi dan peningkatan konsumsi elektronik telah menyebabkan peningkatan jumlah sampah elektronik yang sulit diatasi.</li>
            <li class="list-decimal list-inside"><span class="font-medium">Reciklabilitas dan pemulihan bahan:</span> Beberapa komponen dalam e-waste sulit untuk didaur ulang atau dipulihkan, menghambat upaya pengelolaan yang efektif.</li>
            <li class="list-decimal list-inside"><span class="font-medium">Regulasi yang kurang memadai:</span> Tidak semua negara memiliki regulasi yang memadai untuk mengatur dan mengelola e-waste dengan baik.</li>
            <li class="list-decimal list-inside"><span class="font-medium">Kurangnya kesadaran dan pendidikan:</span> Kesadaran masyarakat tentang pentingnya pengelolaan e-waste yang baik masih rendah, sehingga pendidikan dan kampanye menjadi penting.</li>
        </ol>

        <br>
        <h2 class="text-lg font-semibold">Upaya Pengelolaan Sampah Elektronik</h2>
        Upaya yang dapat dilakukan dalam pengelolaan sampah elektronik meliputi:
        <ol class="pl-5">
            <li class="list-decimal list-inside"><span class="font-medium">Daur ulang dan pemulihan:</span> Meningkatkan sistem daur ulang dan pemulihan komponen elektronik yang masih berfungsi atau berharga.</li>
            <li class="list-decimal list-inside"><span class="font-medium">Regulasi yang ketat:</span> Mengembangkan dan menerapkan regulasi yang memadai untuk mengatur pengelolaan e-waste, termasuk tanggung jawab produsen dalam siklus hidup produk.</li>
            <li class="list-decimal list-inside"><span class="font-medium">Regulasi yang kurang memadai:</span> Tidak semua negara memiliki regulasi yang memadai untuk mengatur dan mengelola e-waste dengan baik.</li>
            <li class="list-decimal list-inside"><span class="font-medium">Kampanye edukasi:</span> Meningkatkan kesadaran dan pendidikan masyarakat tentang dampak negatif sampah elektronik dan pentingnya pengelolaan yang baik.</li>
        </ol>

        <br>
        <p>Sampah elektronik merupakan masalah serius yang membutuhkan perhatian serius. Dengan memahami dampak negatifnya dan mengatasi tantangan dalam pengelolaan, kita dapat mengurangi dampak lingkungan dan kesehatan dari sampah elektronik serta mempromosikan penggunaan yang bertanggung jawab terhadap peralatan elektronik.</p>

        <br>
        Referensi:
        <li>Baldé, C. P., Wang, F., Kuehr, R., Huisman, J. (2015). The global e-waste monitor - 2014. United Nations University, International Telecommunication Union, and International Solid Waste Association.</li>
        <li>Robinson, B. H. (2009). E-waste: An assessment of global production and environmental impacts. Science of the Total Environment, 408(2), 183-191.</li>
        <li>United Nations Environment Programme. (2021). Global E-waste Monitor 2020: Quantities, flows and the circular economy potential. Retrieved from https://www.unep.org/resources/report/global-e-waste-monitor-2020</li>
        <li>Song, Q., Li, J., Ji, X., Yang, K., Tang, X., Bai, Y., ... & Bi, J. (2021). Environmental effects and health risks of heavy metals in electronic waste dismantling sites in China. Environmental Pollution, 269, 116200.</li>
        <li>Schluep, M., & Hagelüken, C. (2018). Recycling - from e-waste to resources. In Handbook of recycling (pp. 581-601). Elsevier.</li>
    </x-artikel>

@endsection 