<style>
                *{
                	font-family: 'arial'
                	},
                table.data {
                    border-collapse: collapse;
                    color:#5E5B5C;
                }

                table.data thead th {
                    text-align: center;
                    padding: 10px;
                }

                table.data tbody td {
                    padding: 10px 5px;
                }

                table.data tbody th {
                    padding: 10px 5px;
                }

                .text-center {
                    text-align:center;
                }

                .text-right {
                    text-align:right;
                }

                .text-left {
                    text-align:left;
                }
            </style>

<page style="font-family : "Arial"; font-size : 12pt;">
	<h1 class="text-center">
		KELURAHAN SESETAN
		<h3 class="text-center">Laporan Tanggal <?php echo $tglMulai.' s/d '.$tglAkhir; ?></h3>
	</h1>
	<br />
	<table class="data" border="1">
		<thead>
			<tr>
				<th>Lingkungan</th>
				<?php if ($ttd == 1 || $ttd == 2 ) :?>
				<th>Kelahiran</th>
				<?php endif; ?>
				<?php if ($ttd == 1 || $ttd == 3 ) :?>
				<th>Kematian</th>
				<?php endif; ?>
				<?php if ($ttd == 1 || $ttd == 4 ) :?>
				<th>Mutasi Masuk</th>
				<?php endif;?>
				<?php if ($ttd == 1 || $ttd == 5 ) :?>
				<th>Mutasi Keluar</th>
				<?php endif; ?>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data as $row) :?>
				<tr>
					<td><?=$row->lingkungan?></td>
					<?php if ($ttd == 1 || $ttd == 2 ) :?>
			
					<td class="text-center hide"><?=$row->kelahiran?></td>
					<?php endif; ?>
					<?php if ($ttd == 1 || $ttd == 3 ) :?>
			
					<td class="text-center"><?=$row->kematian?></td>
					<?php endif; ?>
					<?php if ($ttd == 1 || $ttd == 4 ) :?>
				
					<td class="text-center"><?=$row->mutasi_masuk?></td>
					<?php endif;?>
					<?php if ($ttd == 1 || $ttd == 5 ) :?>
			
					<td class="text-center"><?=$row->mutasi_keluar?></td>
					<?php endif; ?>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<br /><br /><br />
	<!-- <table align="right">
		<tr><td class="text-center">Denpasar, <?php echo $tglSekarang; ?></td></tr>
		<tr><td class="text-center"><?php echo $ttd->jabatan; ?></td></tr>
		<tr><td><br /><br /><br /></td></tr>
		<tr><td class="text-center"><?php echo $ttd->nama; ?></td></tr>
		<tr><td class="text-center">NIP. <?php echo $ttd->nip; ?></td></tr>
	</table> -->
</page>