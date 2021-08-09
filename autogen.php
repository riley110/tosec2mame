<?php
	require "functions.php";

	// Atari 800
	$a800 = array("Atari 8bit - Applications - [ATR] (TOSEC-v2018-03-08_CM).dat",
				  "Atari 8bit - Compilations - Applications - [ATR] (TOSEC-v2013-12-13_CM).dat",
				  "Atari 8bit - Compilations - Demos - [ATR] (TOSEC-v2013-12-13_CM).dat",
				  "Atari 8bit - Compilations - Educational - [ATR] (TOSEC-v2013-12-13_CM).dat",
				  "Atari 8bit - Compilations - Games - [ATR] (TOSEC-v2012-07-18_CM).dat",
				  "Atari 8bit - Demos - [ATR] (TOSEC-v2018-03-08_CM).dat",
				  "Atari 8bit - Docs - [ATR] (TOSEC-v2013-12-13_CM).dat",
				  "Atari 8bit - Educational - [ATR] (TOSEC-v2012-07-18_CM).dat",
				  "Atari 8bit - Games - [ATR] (TOSEC-v2018-03-08_CM).dat",
				  "Atari 8bit - Magazines - [ATR] (TOSEC-v2014-10-30_CM).dat",
				  "Atari 8bit - Sources - [ATR] (TOSEC-v2013-12-13_CM).dat");

	makeList($a800, "a800_flop_tosec", "Atari 800 floppy disks (TOSEC)", "flop", "floppy_5_25", 2);

	// Acorn BBC
	$bbc_adl = array("Acorn BBC - Applications - [ADL] (TOSEC-v2013-10-16_CM).dat",
					 "Acorn BBC - Compilations - [ADL] (TOSEC-v2013-10-16_CM).dat",
					 "Acorn BBC - Educational - [ADL] (TOSEC-v2013-10-22_CM).dat",
					 "Acorn BBC - Games - [ADL] (TOSEC-v2013-10-22_CM).dat",
					 "Acorn BBC - Magazines - [ADL] (TOSEC-v2013-10-22_CM).dat",
					 "Acorn BBC - Multimedia - [ADL] (TOSEC-v2013-10-22_CM).dat");

	$bbc_dsd = array("Acorn BBC - Applications - [DSD] (TOSEC-v2013-10-16_CM).dat",
					 "Acorn BBC - Compilations - [DSD] (TOSEC-v2013-10-16_CM).dat",
					 "Acorn BBC - Coverdisks - [DSD] (TOSEC-v2013-10-16_CM).dat",
					 "Acorn BBC - Educational - [DSD] (TOSEC-v2013-10-22_CM).dat",
					 "Acorn BBC - Games - [DSD] (TOSEC-v2013-10-22_CM).dat",
					 "Acorn BBC - Magazines - [DSD] (TOSEC-v2013-10-22_CM).dat",
					 "Acorn BBC - Multimedia - [DSD] (TOSEC-v2013-10-22_CM).dat");

	$bbc_ssd = array("Acorn BBC - Applications - [SSD] (TOSEC-v2013-10-16_CM).dat",
					 "Acorn BBC - Compilations - [SSD] (TOSEC-v2013-10-16_CM).dat",
					 "Acorn BBC - Coverdisks - [SSD] (TOSEC-v2013-10-16_CM).dat",
					 "Acorn BBC - Demos - [SSD] (TOSEC-v2013-10-22_CM).dat",
					 "Acorn BBC - Educational - [SSD] (TOSEC-v2013-10-22_CM).dat",
					 "Acorn BBC - Games - [SSD] (TOSEC-v2013-10-22_CM).dat",
					 "Acorn BBC - Magazines - [SSD] (TOSEC-v2013-10-22_CM).dat",
					 "Acorn BBC - Multimedia - [SSD] (TOSEC-v2013-10-22_CM).dat");

	makeList($bbc_adl, "bbc_flop_tosec_adl", "Acorn BBC series floppy disks (TOSEC - ADL)", "flop", "floppy_5_25", 2);
	makeList($bbc_dsd, "bbc_flop_tosec_dsd", "Acorn BBC series floppy disks (TOSEC - DSD)", "flop", "floppy_5_25", 2);
	makeList($bbc_ssd, "bbc_flop_tosec_ssd", "Acorn BBC series floppy disks (TOSEC - SSD)", "flop", "floppy_5_25", 2);

	// Amiga
	$amiga_apps = array("Commodore Amiga - Applications - [ADF] (TOSEC-v2021-06-23_CM).dat",
						"Commodore Amiga - Applications - Public Domain - [ADF] (TOSEC-v2021-06-23_CM).dat");

	$amiga_comps = array("Commodore Amiga - Compilations - Applications (TOSEC-v2021-07-31_CM).dat",
						 "Commodore Amiga - Compilations - Games (TOSEC-v2021-07-31_CM).dat",
						 "Commodore Amiga - Compilations - Various (TOSEC-v2021-07-31_CM).dat",
						 "Commodore Amiga - Demos - Packs (TOSEC-v2021-07-31_CM).dat");

	$amiga_demos = array("Commodore Amiga - Demos - Various - [ADF] (TOSEC-v2021-07-18_CM).dat",
						 "Commodore Amiga - Demos - Animations and Videos (TOSEC-v2021-06-24_CM).dat",
						 "Commodore Amiga - Demos - Music (TOSEC-v2021-07-31_CM).dat",
						 "Commodore Amiga - Demos - Slideshows (TOSEC-v2021-06-15_CM).dat");

	$amiga_diskmags = array("Commodore Amiga - Diskmags (TOSEC-v2021-07-24_CM).dat",
							"Commodore Amiga - Packmags (TOSEC-v2020-03-02_CM).dat");

	$amiga_games = array("Commodore Amiga - Games - [ADF] (TOSEC-v2021-07-24_CM).dat",
						 "Commodore Amiga - Games - Emerald Mine (TOSEC-v2020-11-07_CM).dat",
						 "Commodore Amiga - Games - Public Domain - [ADF] (TOSEC-v2021-07-11_CM).dat",
						 "Commodore Amiga - Games - Save Disks (TOSEC-v2020-09-16_CM).dat",
						 "Commodore Amiga - Games - Unofficial Addons & Patches (TOSEC-v2021-07-03_CM).dat");

	$amiga_pd = array("Commodore Amiga - Collections - Amiga Amateur Radio User Group (TOSEC-v2014-02-12_CM).dat",
					  "Commodore Amiga - Collections - Amiga Public Domain Connection (TOSEC-v2017-07-19_CM).dat",
					  "Commodore Amiga - Collections - Auge 4000 (TOSEC-v2014-07-14_CM).dat",
					  "Commodore Amiga - Collections - Bavarian (TOSEC-v2013-09-20_CM).dat",
					  "Commodore Amiga - Collections - Best of Public Domain, The (TOSEC-v2017-04-22_CM).dat",
					  "Commodore Amiga - Collections - Berliner Spielekiste (TOSEC-v2020-06-23_CM).dat",
					  "Commodore Amiga - Collections - Cactus (TOSEC-v2014-07-14_CM).dat",
					  "Commodore Amiga - Collections - Camelot (TOSEC-v2020-11-07_CM).dat",
					  "Commodore Amiga - Collections - Den Norske Hjemmedataklubben (TOSEC-v2017-04-09_CM).dat",
					  "Commodore Amiga - Collections - Franz PD (TOSEC-v2019-12-16_CM).dat",
					  "Commodore Amiga - Collections - Fred Fish (TOSEC-v2020-04-12_CM).dat",
					  "Commodore Amiga - Collections - Memphis Amiga Group (TOSEC-v2016-08-13_CM).dat",
					  "Commodore Amiga - Collections - MegaDisc (TOSEC-v2016-09-25_CM).dat",
					  "Commodore Amiga - Collections - Nordlicht Spiele (TOSEC-v2018-03-05_CM).dat",
					  "Commodore Amiga - Collections - New Zealand Amiga Users Group (TOSEC-v2011-11-01_CM).dat",
					  "Commodore Amiga - Collections - PD Unicornics (TOSEC-v2021-04-10_CM).dat",
					  "Commodore Amiga - Collections - Panorama (TOSEC-v2016-07-10_CM).dat",
					  "Commodore Amiga - Collections - R-H-S (TOSEC-v2021-04-07_CM).dat",
					  "Commodore Amiga - Collections - Scope (TOSEC-v2021-02-27_CM).dat",
					  "Commodore Amiga - Collections - Software of the Month Club (SOMC) (TOSEC-v2011-11-01_CM).dat",
					  "Commodore Amiga - Collections - Taifun (TOSEC-v2019-11-28_CM).dat",
					  "Commodore Amiga - Collections - Tampa Bay Amiga Group (TOSEC-v2013-07-24_CM).dat",
					  "Commodore Amiga - Collections - TOGA (TOSEC-v2021-02-11_CM).dat",
					  "Commodore Amiga - Collections - Topik (TOSEC-v2011-11-01_CM).dat",
					  "Commodore Amiga - Collections - TSWF (TOSEC-v2018-08-20_CM).dat",
					  "Commodore Amiga - Collections - Various (TOSEC-v2021-06-02_CM).dat");

	makeList($amiga_apps, "amiga_tosec_app", "Commodore Amiga floppy disks (TOSEC - Applications)", "flop", "floppy_3_5", 2);
	makeList($amiga_comps, "amiga_tosec_comp", "Commodore Amiga floppy disks (TOSEC - Compilations)", "flop", "floppy_3_5", 2);
	makeList(array("Commodore Amiga - Coverdisks - [ADF] (TOSEC-v2021-03-14_CM).dat"), "amiga_tosec_cover", "Commodore Amiga floppy disks (TOSEC - Coverdisks)", "flop", "floppy_3_5", 2);
	makeList($amiga_demos, "amiga_tosec_demo", "Commodore Amiga floppy disks (TOSEC - Demos)", "flop", "floppy_3_5", 2);
	makeList($amiga_diskmags, "amiga_tosec_mag", "Commodore Amiga floppy disks (TOSEC - Diskmags)", "flop", "floppy_3_5", 2);
	makeList(array("Commodore Amiga - Docs (TOSEC-v2021-07-31_CM).dat"), "amiga_tosec_doc", "Commodore Amiga floppy disks (TOSEC - Docs)", "flop", "floppy_3_5", 2);
	makeList(array("Commodore Amiga - Educational - [ADF] (TOSEC-v2021-06-22_CM).dat"), "amiga_tosec_edu", "Commodore Amiga floppy disks (TOSEC - Educational)", "flop", "floppy_3_5", 2);
	makeList($amiga_games, "amiga_tosec_game", "Commodore Amiga floppy disks (TOSEC - Games)", "flop", "floppy_3_5", 2);
	makeList($amiga_pd, "amiga_tosec_pd", "Commodore Amiga floppy disks (TOSEC - Public Domain Collections)", "flop", "floppy_3_5", 2);

	// C64 (5.25)
	$c64_d64_apps = array("Commodore C64 - Applications - [D64] (TOSEC-v2021-07-26_CM).dat",
						  "Commodore C64 - Applications - Test Disks - [D64] (TOSEC-v2021-07-14_CM).dat",
						  "Commodore C64 - GEOS - [D64] (TOSEC-v2020-10-23_CM).dat",
						  "Commodore C64 - Operating Systems - [D64] (TOSEC-v2021-07-14_CM).dat");

	$c64_d64_cols = array("Commodore C64 - Collections - Blast from the Past (TOSEC-v2017-08-22_CM).dat",
						  "Commodore C64 - Collections - BugJam (TOSEC-v2019-09-21_CM).dat",
						  "Commodore C64 - Collections - C64CD'96 (TOSEC-v2019-12-15_CM).dat",
						  "Commodore C64 - Collections - Derbyshire Ram - [D64] (TOSEC-v2019-02-17_CM).dat",
						  "Commodore C64 - Collections - Dotson (TOSEC-v2019-02-20_CM).dat",
						  "Commodore C64 - Collections - Earthshaker (TOSEC-v2020-07-02_CM).dat",
						  "Commodore C64 - Collections - Einstein (TOSEC-v2019-02-17_CM).dat",
						  "Commodore C64 - Collections - Fairlight (TOSEC-v2017-08-22_CM).dat",
						  "Commodore C64 - Collections - Great White North (TOSEC-v2019-02-24_CM).dat",
						  "Commodore C64 - Collections - High Voltage (TOSEC-v2019-02-20_CM).dat",
						  "Commodore C64 - Collections - Hornet (TOSEC-v2017-08-22_CM).dat",
						  "Commodore C64 - Collections - Jazzcat (TOSEC-v2019-09-21_CM).dat",
						  "Commodore C64 - Collections - Manik (TOSEC-v2019-02-17_CM).dat",
						  "Commodore C64 - Collections - Oxyron (TOSEC-v2019-12-15_CM).dat",
						  "Commodore C64 - Collections - Tadpole (TOSEC-v2017-08-22_CM).dat",
						  "Commodore C64 - Collections - Watties (TOSEC-v2017-08-22_CM).dat");

	$c64_d64_comps = array("Commodore C64 - Compilations - Demos - [D64] (TOSEC-v2020-09-23_CM).dat",
						   "Commodore C64 - Compilations - Diskmags - [D64] (TOSEC-v2020-04-28_CM).dat",
						   "Commodore C64 - Compilations - Educational (TOSEC-v2018-12-16_CM).dat",
						   "Commodore C64 - Compilations - Games - [D64] (TOSEC-v2020-09-20_CM).dat",
						   "Commodore C64 - Compilations - Music - [D64] (TOSEC-v2020-10-23_CM).dat",
						   "Commodore C64 - Compilations - Various - [D64] (TOSEC-v2020-08-08_CM).dat");

	$c64_d64_demos = array("Commodore C64 - Demos - [D64] (TOSEC-v2021-07-25_CM).dat",
						   "Commodore C64 - Animations - [D64] (TOSEC-v2021-07-26_CM).dat",
						   "Commodore C64 - Cracktros - [D64] (TOSEC-v2021-07-23_CM).dat",
						   "Commodore C64 - Graphics - [D64] (TOSEC-v2021-07-25_CM).dat",
						   "Commodore C64 - Music - [D64] (TOSEC-v2021-07-25_CM).dat");

	$c64_d64_games = array("Commodore C64 - Games - [D64] (TOSEC-v2021-07-26_CM).dat",
						   "Commodore C64 - Games - 3DCK - [D64] (TOSEC-v2021-06-16_CM).dat",
						   "Commodore C64 - Games - ACS - [D64] (TOSEC-v2020-01-19_CM).dat",
						   "Commodore C64 - Games - Boulder Dash - [D64] (TOSEC-v2021-07-26_CM).dat",
						   "Commodore C64 - Games - GKGM - [D64] (TOSEC-v2021-06-16_CM).dat",
						   "Commodore C64 - Games - PCS - [D64] (TOSEC-v2020-12-21_CM).dat",
						   "Commodore C64 - Games - Previews - [D64] (TOSEC-v2021-07-26_CM).dat",
						   "Commodore C64 - Games - SEUCK - [D64] (TOSEC-v2021-07-26_CM).dat");

	$c64_d64_mags = array("Commodore C64 - Diskmags - Commercial - [D64] (TOSEC-v2021-07-14_CM).dat",
						  "Commodore C64 - Diskmags - Scene - [D64] (TOSEC-v2021-07-25_CM).dat");

	$c64_d71 = array("Commodore C64 - Applications - [D71] (TOSEC-v2021-02-11_CM).dat",
					 "Commodore C64 - Applications - Test Disks - [D71] (TOSEC-v2018-10-18_CM).dat",
					 "Commodore C64 - Demos - [D71] (TOSEC-v2021-06-16_CM).dat",
					 "Commodore C64 - Diskmags - Scene - [D71] (TOSEC-v2012-06-24_CM).dat",
					 "Commodore C64 - Games - [D71] (TOSEC-v2020-04-05_CM).dat",
					 "Commodore C64 - Music - [D71] (TOSEC-v2021-06-16_CM).dat");

	$c64_g64 = array("Commodore C64 - Applications - [G64] (TOSEC-v2021-07-14_CM).dat",
					 "Commodore C64 - Applications - Test Disks - [G64] (TOSEC-v2021-07-14_CM).dat",
					 "Commodore C64 - Collections - Derbyshire Ram - [G64] (TOSEC-v2019-02-17_CM).dat",
					 "Commodore C64 - Compilations - Demos - [G64] (TOSEC-v2018-11-25_CM).dat",
					 "Commodore C64 - Demos - [G64] (TOSEC-v2021-07-14_CM).dat",
					 "Commodore C64 - Diskmags - Commercial - [G64] (TOSEC-v2021-07-14_CM).dat",
					 "Commodore C64 - Diskmags - Scene - [G64] (TOSEC-v2019-01-05_CM).dat",
					 "Commodore C64 - Docs - [G64] (TOSEC-v2018-12-16_CM).dat",
					 "Commodore C64 - Educational - [G64] (TOSEC-v2021-07-26_CM).dat",
					 "Commodore C64 - Games - [G64] (TOSEC-v2021-07-25_CM).dat",
					 "Commodore C64 - Games - Boulder Dash - [G64] (TOSEC-v2021-07-14_CM).dat",
					 "Commodore C64 - Games - Previews - [G64] (TOSEC-v2021-06-19_CM).dat",
					 "Commodore C64 - Games - SEUCK - [G64] (TOSEC-v2018-02-21_CM).dat",
					 "Commodore C64 - Music - [G64] (TOSEC-v2021-07-14_CM).dat",
					 "Commodore C64 - Public Domain - [G64] (TOSEC-v2014-02-02_CM).dat");

	$c64_d81 = array("Commodore C64 - Applications - [D81] (TOSEC-v2021-02-09_CM).dat",
					 "Commodore C64 - Compilations - Games - [D81] (TOSEC-v2018-08-19_CM).dat",
					 "Commodore C64 - Coverdisks - [D81] (TOSEC-v2013-09-16_CM).dat",
					 "Commodore C64 - Demos - [D81] (TOSEC-v2021-07-25_CM).dat",
					 "Commodore C64 - Diskmags - Commercial - [D81] (TOSEC-v2020-01-20_CM).dat",
					 "Commodore C64 - Diskmags - Scene - [D81] (TOSEC-v2021-07-23_CM).dat",
					 "Commodore C64 - Educational - [D81] (TOSEC-v2019-12-13_CM).dat",
					 "Commodore C64 - Games - [D81] (TOSEC-v2021-07-26_CM).dat",
					 "Commodore C64 - Games - Previews - [D81] (TOSEC-v2018-12-16_CM).dat",
					 "Commodore C64 - Graphics - [D81] (TOSEC-v2018-01-03_CM).dat",
					 "Commodore C64 - Music - [D81] (TOSEC-v2021-01-27_CM).dat");

	makeList($c64_d64_apps, "c64_flop_tosec_d64_app", "Commodore 64 floppy disks (TOSEC - D64 - Applications)", "flop", "floppy_5_25", 2);
	makeList($c64_d64_cols, "c64_flop_tosec_d64_col", "Commodore 64 floppy disks (TOSEC - D64 - Collections)", "flop", "floppy_5_25", 2);
	makeList($c64_d64_comps, "c64_flop_tosec_d64_comp", "Commodore 64 floppy disks (TOSEC - D64 - Compilations)", "flop", "floppy_5_25", 2);
	makeList($c64_d64_demos, "c64_flop_tosec_d64_demo", "Commodore 64 floppy disks (TOSEC - D64 - Demos)", "flop", "floppy_5_25", 2);
	makeList($c64_d64_games, "c64_flop_tosec_d64_game", "Commodore 64 floppy disks (TOSEC - D64 - Games)", "flop", "floppy_5_25", 2);
	makeList($c64_d64_mags, "c64_flop_tosec_d64_mag", "Commodore 64 floppy disks (TOSEC - D64 - Diskmags)", "flop", "floppy_5_25", 2);

	makeList(array("Commodore C64 - Coverdisks - [D64] (TOSEC-v2020-10-25_CM).dat"), "c64_flop_tosec_d64_cover", "Commodore 64 floppy disks (TOSEC - D64 - Coverdisks)", "flop", "floppy_5_25", 2);
	makeList(array("Commodore C64 - Docs - [D64] (TOSEC-v2021-07-14_CM).dat"), "c64_flop_tosec_d64_doc", "Commodore 64 floppy disks (TOSEC - D64 - Docs)", "flop", "floppy_5_25", 2);
	makeList(array("Commodore C64 - Educational - [D64] (TOSEC-v2021-07-26_CM).dat"), "c64_flop_tosec_d64_edu", "Commodore 64 floppy disks (TOSEC - D64 - Educational)", "flop", "floppy_5_25", 2);
	makeList(array("Commodore C64 - Public Domain - [D64] (TOSEC-v2019-04-23_CM).dat"), "c64_flop_tosec_d64_pd", "Commodore 64 floppy disks (TOSEC - D64 - Public Domain)", "flop", "floppy_5_25", 2);
	makeList(array("Commodore C64 - Sources (TOSEC-v2014-02-01_CM).dat"), "c64_flop_tosec_d64_src", "Commodore 64 floppy disks (TOSEC - D64 - Sources)", "flop", "floppy_5_25", 2);

	makeList($c64_d71, "c64_flop_tosec_d71", "Commodore 64 floppy disks (TOSEC - D71)", "flop", "floppy_5_25", 2);
	makeList($c64_g64, "c64_flop_tosec_g64", "Commodore 64 floppy disks (TOSEC - G64)", "flop", "floppy_5_25", 2);
	makeList($c64_d81, "c64_flop_tosec_d81", "Commodore 64 floppy disks (TOSEC - D81)", "flop", "floppy_3_5", 2);

	// Atari ST
	$atarist = array("Atari ST - Applications - [ST] (TOSEC-v2018-09-02_CM).dat",
					 "Atari ST - Collections - 4U (TOSEC-v2013-12-13_CM).dat",
					 "Atari ST - Collections - ACN (TOSEC-v2013-12-13_CM).dat",
					 "Atari ST - Collections - Atari Inside (TOSEC-v2013-12-13_CM).dat",
					 "Atari ST - Collections - Atari Journal (TOSEC-v2013-12-13_CM).dat",
					 "Atari ST - Collections - Atari Magazin (TOSEC-v2013-12-13_CM).dat",
					 "Atari ST - Collections - Bitz (TOSEC-v2013-12-13_CM).dat",
					 "Atari ST - Collections - Budgie UK (TOSEC-v2013-12-13_CM).dat",
					 "Atari ST - Collections - Cobra (TOSEC-v2013-12-13_CM).dat",
					 "Atari ST - Collections - Delta Labs (TOSEC-v2013-12-13_CM).dat",
					 "Atari ST - Collections - Diverse (TOSEC-v2013-12-13_CM).dat",
					 "Atari ST - Collections - Falcon (TOSEC-v2013-12-13_CM).dat",
					 "Atari ST - Collections - FaST Club (TOSEC-v2013-12-13_CM).dat",
					 "Atari ST - Collections - Floppyshop (TOSEC-v2011-03-07_CM).dat",
					 "Atari ST - Collections - GFA Club (TOSEC-v2013-12-13_CM).dat",
					 "Atari ST - Collections - Heim Special Line (TOSEC-v2013-12-13_CM).dat",
					 "Atari ST - Collections - Kontrast (TOSEC-v2013-12-13_CM).dat",
					 "Atari ST - Collections - Poolware (TOSEC-v2013-12-13_CM).dat",
					 "Atari ST - Collections - ST Computer (TOSEC-v2013-12-13_CM).dat",
					 "Atari ST - Collections - ST Vision (TOSEC-v2013-12-13_CM).dat",
					 "Atari ST - Collections - XEST (TOSEC-v2013-12-13_CM).dat",
					 "Atari ST - Compilations - Applications (TOSEC-v2015-05-07_CM).dat",
					 "Atari ST - Compilations - Demos (TOSEC-v2015-05-07_CM).dat",
					 "Atari ST - Compilations - Educational (TOSEC-v2013-12-13_CM).dat",
					 "Atari ST - Compilations - Games - [ST] (TOSEC-v2015-05-07_CM).dat",
					 "Atari ST - Coverdisks - [ST] (TOSEC-v2019-05-03_CM).dat",
					 "Atari ST - Demos - [ST] (TOSEC-v2015-05-07_CM).dat",
					 "Atari ST - Diskmags - [ST] (TOSEC-v2015-05-07_CM).dat",
					 "Atari ST - Docs (TOSEC-v2011-03-04_CM).dat",
					 "Atari ST - Educational - [ST] (TOSEC-v2020-07-12_CM).dat",
					 "Atari ST - Games - [ST] (TOSEC-v2020-07-12_CM).dat",
					 "Atari ST - Operating Systems - [ST] (TOSEC-v2015-05-07_CM).dat");

	$atarist_stx = array("Atari ST - Applications - [STX] (TOSEC-v2018-10-19_CM).dat",
						 "Atari ST - Compilations - Games - [STX] (TOSEC-v2015-05-07_CM).dat",
						 "Atari ST - Demos - [STX] (TOSEC-v2013-12-13_CM).dat",
						 "Atari ST - Diskmags - [STX] (TOSEC-v2013-12-13_CM).dat",
						 "Atari ST - Educational - [STX] (TOSEC-v2018-03-18_CM).dat",
						 "Atari ST - Games - [STX] (TOSEC-v2018-03-18_CM).dat");

	makeList($atarist, "st_flop_tosec", "Atari ST floppy disks (TOSEC - ST)", "flop", "floppy_3_5", 2);
	makeList($atarist_stx, "st_flop_tosec_stx", "Atari ST floppy disks (TOSEC - STX)", "flop", "floppy_3_5", 2);

	// TI-99
	makeList(array("Texas Instruments TI-99 4A - Various (TOSEC-v2014-06-06_CM).dat"), "ti99_flop", "Texas Instruments TI-99/4A floppy disks (TOSEC)", "flop", "floppy_5_25", 2);

	// Astrocade
	$astrocde_cass = array("Bally Professional Arcade & Astrocade - Applications - [WAV] (TOSEC-v2020-07-12_CM).dat",
						   "Bally Professional Arcade & Astrocade - Compilations - Demos - [WAV] (TOSEC-v2017-07-25_CM).dat",
						   "Bally Professional Arcade & Astrocade - Compilations - Games - [WAV] (TOSEC-v2017-09-03_CM).dat",
						   "Bally Professional Arcade & Astrocade - Compilations - Various - [WAV] (TOSEC-v2017-09-03_CM).dat",
						   "Bally Professional Arcade & Astrocade - Demos - [WAV] (TOSEC-v2017-09-03_CM).dat",
						   "Bally Professional Arcade & Astrocade - Educational - [WAV] (TOSEC-v2017-09-03_CM).dat",
						   "Bally Professional Arcade & Astrocade - Games - [WAV] (TOSEC-v2017-09-03_CM).dat",
						   "Bally Professional Arcade & Astrocade - Various - [WAV] (TOSEC-v2017-09-03_CM).dat");

	makeList($astrocde_cass, "astrocde_cass", "Bally Professional Arcade cassettes (TOSEC)", "cass", "astrocde_cass", 2);

	// C64DTV
	$dtv_d64 = array("Commodore C64DTV - Applications - [D64] (TOSEC-v2013-03-05_CM).dat",
					 "Commodore C64DTV - Demos - [D64] (TOSEC-v2019-03-24_CM).dat",
					 "Commodore C64DTV - Games - [D64] (TOSEC-v2015-07-25_CM).dat");

	$dtv_d81 = array("Commodore C64DTV - Demos - [D81] (TOSEC-v2013-03-05_CM).dat");

	makeList($dtv_d64, "c64dtv_flop_d64", "Commodore 64 DTV floppy disks (TOSEC - D64)", "flop", "floppy_5_25", 2);
	makeList($dtv_d81, "c64dtv_flop_d81", "Commodore 64 DTV floppy disks (TOSEC - D81)", "flop", "floppy_3_5", 2);

	// Plus-4
	$plus4_cass = array("Commodore C16, C116 & Plus-4 - Educational - [TAP] (TOSEC-v2013-12-16_CM).dat",
						"Commodore C16, C116 & Plus-4 - Games - [TAP] (TOSEC-v2014-02-01_CM).dat",
						"Commodore C16, C116 & Plus-4 - Utilities - [TAP] (TOSEC-v2013-12-16_CM).dat");

	$plus4_flop = array("Commodore C16, C116 & Plus-4 - Collections - Recall (TOSEC-v2013-12-16_CM).dat",
						"Commodore C16, C116 & Plus-4 - Demos - [D64] (TOSEC-v2013-12-16_CM).dat",
						"Commodore C16, C116 & Plus-4 - Educational - [D64] (TOSEC-v2013-12-16_CM).dat",
						"Commodore C16, C116 & Plus-4 - Games - [D64] (TOSEC-v2014-06-19_CM).dat",
						"Commodore C16, C116 & Plus-4 - Magazines - [D64] (TOSEC-v2013-12-16_CM).dat",
						"Commodore C16, C116 & Plus-4 - Utilities - [D64] (TOSEC-v2013-12-16_CM).dat",
						"Commodore C16, C116 & Plus-4 - Utilities - [G64] (TOSEC-v2013-12-16_CM).dat");

	makeList($plus4_cass, "plus4_cass_tosec", "Commodore Plus/4 cassettes (TOSEC)", "cass", "cbm_cass", 2);
	makeList($plus4_flop, "plus4_flop_tosec", "Commodore Plus/4 floppy disks (TOSEC)", "flop", "floppy_5_25", 2);

	// C128
	$c128_d64 = array("Commodore C128 - Applications - [D64] (TOSEC-v2021-07-14_CM).dat",
					  "Commodore C128 - Applications - CPM - [D64] (TOSEC-v2018-03-25_CM).dat",
					  "Commodore C128 - Applications - Source - [D64] (TOSEC-v2020-01-19_CM).dat",
					  "Commodore C128 - Coverdisks - [D64] (TOSEC-v2019-09-07_CM).dat",
					  "Commodore C128 - Demos - [D64] (TOSEC-v2021-07-23_CM).dat",
					  "Commodore C128 - Educational - [D64] (TOSEC-v2018-12-05_CM).dat",
					  "Commodore C128 - Games - [D64] (TOSEC-v2021-07-26_CM).dat",
					  "Commodore C128 - Magazines - [D64] (TOSEC-v2021-07-14_CM).dat",
					  "Commodore C128 - Operating Systems - [D64] (TOSEC-v2018-03-25_CM).dat",
					  "Commodore C128 - Operating Systems - GEOS - [D64] (TOSEC-v2017-10-23_CM).dat");

	$c128_d71 = array("Commodore C128 - Applications - [D71] (TOSEC-v2020-01-19_CM).dat",
					  "Commodore C128 - Applications - CPM - [D71] (TOSEC-v2018-09-22_CM).dat",
					  "Commodore C128 - Games - [D71] (TOSEC-v2017-10-23_CM).dat",
					  "Commodore C128 - Games - CPM - [D71] (TOSEC-v2018-03-25_CM).dat",
					  "Commodore C128 - Operating Systems - [D71] (TOSEC-v2020-06-26_CM).dat",
					  "Commodore C128 - Operating Systems - GEOS - [D71] (TOSEC-v2017-10-23_CM).dat");

	$c128_d81 = array("Commodore C128 - Applications - [D81] (TOSEC-v2020-06-26_CM).dat",
					  "Commodore C128 - Applications - CPM - [D81] (TOSEC-v2018-03-25_CM).dat",
					  "Commodore C128 - Demos - [D81] (TOSEC-v2017-10-23_CM).dat",
					  "Commodore C128 - Games - [D81] (TOSEC-v2018-10-26_CM).dat",
					  "Commodore C128 - Magazines - [D81] (TOSEC-v2019-01-04_CM).dat",
					  "Commodore C128 - Operating Systems - [D81] (TOSEC-v2018-03-25_CM).dat",
					  "Commodore C128 - Operating Systems - GEOS - [D81] (TOSEC-v2017-10-23_CM).dat");

	$c128_g64 = array("Commodore C128 - Applications - [G64] (TOSEC-v2021-07-14_CM).dat",
					  "Commodore C128 - Educational - [G64] (TOSEC-v2021-07-14_CM).dat",
					  "Commodore C128 - Games - [G64] (TOSEC-v2021-07-14_CM).dat");

	$c128_tap = array("Commodore C128 - Games - [TAP] (TOSEC-v2019-09-07_CM).dat",
					  "Commodore C128 - Magazines - [TAP] (TOSEC-v2013-10-03_CM).dat");

	makeList($c128_d64, "c128_flop_tosec_d64", "Commodore 128 floppy disks (TOSEC - D64)", "flop", "floppy_5_25", 2);
	makeList($c128_d71, "c128_flop_tosec_d71", "Commodore 128 floppy disks (TOSEC - D71)", "flop", "floppy_5_25", 2);
	makeList($c128_d81, "c128_flop_tosec_d81", "Commodore 128 floppy disks (TOSEC - D81)", "flop", "floppy_3_5", 2);
	makeList($c128_g64, "c128_flop_tosec_g64", "Commodore 128 floppy disks (TOSEC - G64)", "flop", "floppy_5_25", 2);
	makeList($c128_tap, "c128_cass", "Commodore 128 cassettes (TOSEC)", "cass", "cbm_cass", 2);

	// VIC-20
	$vic20_d64 = array("Commodore VIC20 - Applications - [D64] (TOSEC-v2017-10-23_CM).dat",
					   "Commodore VIC20 - Demos - [D64] (TOSEC-v2017-10-23_CM).dat",
					   "Commodore VIC20 - Games - [D64] (TOSEC-v2018-03-24_CM).dat",
					   "Commodore VIC20 - Magazines - [D64] (TOSEC-v2013-03-06_CM).dat");
	$vic20_d71 = array("Commodore VIC20 - Applications - [D71] (TOSEC-v2017-10-23_CM).dat",
					   );
	$vic20_d81 = array("Commodore VIC20 - Applications - [D81] (TOSEC-v2017-10-23_CM).dat",
					   "Commodore VIC20 - Magazines - [D81] (TOSEC-v2014-10-28_CM).dat");
	$vic20_tap = array("Commodore VIC20 - Applications - [TAP] (TOSEC-v2012-08-17_CM).dat",
					   "Commodore VIC20 - Compilations - Games (TOSEC-v2011-11-07_CM).dat",
					   "Commodore VIC20 - Demos - [TAP] (TOSEC-v2017-10-23_CM).dat",
					   "Commodore VIC20 - Educational - [TAP] (TOSEC-v2018-03-24_CM).dat",
					   "Commodore VIC20 - Games - [TAP] (TOSEC-v2018-03-24_CM).dat",
					   "Commodore VIC20 - Magazines - [TAP] (TOSEC-v2012-08-17_CM).dat");

	makeList($vic20_d64, "vic20_flop_tosec_d64", "Commodore VIC-1001 / VIC-20 floppy disks (TOSEC - D64)", "flop", "floppy_5_25", 2);
	makeList($vic20_d71, "vic20_flop_tosec_d71", "Commodore VIC-1001 / VIC-20 floppy disks (TOSEC - D71)", "flop", "floppy_5_25", 2);
	makeList($vic20_d81, "vic20_flop_tosec_d81", "Commodore VIC-1001 / VIC-20 floppy disks (TOSEC - D81)", "flop", "floppy_3_5", 2);
	makeList($vic20_tap, "vic20_cass_tosec", "Commodore VIC-1001 / VIC-20 cassettes (TOSEC)", "cass", "cbm_cass", 2);

	$zx81 = array("Sinclair ZX81 - Applications - [Multipart] (TOSEC-v2011-09-24_CM).dat",
				  "Sinclair ZX81 - Applications - [P] (TOSEC-v2011-09-24_CM).dat",
				  "Sinclair ZX81 - Demos (TOSEC-v2011-09-24_CM).dat",
				  "Sinclair ZX81 - Educational (TOSEC-v2011-09-24_CM).dat",
				  "Sinclair ZX81 - Games - [Multipart] (TOSEC-v2011-09-24_CM).dat",
				  "Sinclair ZX81 - Games - [P] (TOSEC-v2021-07-25_CM).dat");

	makeList($zx81, "zx81_cass_tosec", "Sinclair ZX81 cassettes (TOSEC)", "cass", "zx81_cass", 2);

	$spectrum_d40 = array("Sinclair ZX Spectrum - Applications - [D40] (TOSEC-v2021-01-15_CM).dat",
						  "Sinclair ZX Spectrum - Compilations - Applications - [D40] (TOSEC-v2021-01-15_CM).dat",
						  "Sinclair ZX Spectrum - Games - [D40] (TOSEC-v2021-01-15_CM).dat");

	$spectrum_d80 = array("Sinclair ZX Spectrum - Magazines - [D80] (TOSEC-v2021-01-15_CM).dat",
						  "Sinclair ZX Spectrum - Applications - [D80] (TOSEC-v2021-01-15_CM).dat",
						  "Sinclair ZX Spectrum - Compilations - Games - [D80] (TOSEC-v2021-01-15_CM).dat",
						  "Sinclair ZX Spectrum - Educational - [D80] (TOSEC-v2021-01-15_CM).dat",
						  "Sinclair ZX Spectrum - Games - [D80] (TOSEC-v2021-01-15_CM).dat");

	$spectrum_mgt = array("Sinclair ZX Spectrum - Magazines - [MGT] (TOSEC-v2021-01-15_CM).dat",
						  "Sinclair ZX Spectrum - Applications - [MGT] (TOSEC-v2021-01-15_CM).dat",
						  "Sinclair ZX Spectrum - Books - [MGT] (TOSEC-v2021-01-15_CM).dat",
						  "Sinclair ZX Spectrum - Compilations - Games - [MGT] (TOSEC-v2021-01-15_CM).dat",
						  "Sinclair ZX Spectrum - Games - [MGT] (TOSEC-v2021-01-15_CM).dat");

	$spectrum_trd = array("Sinclair ZX Spectrum - Music - [TRD] (TOSEC-v2021-01-15_CM).dat",
						  "Sinclair ZX Spectrum - Applications - [TRD] (TOSEC-v2021-01-15_CM).dat",
						  "Sinclair ZX Spectrum - Books - [TRD] (TOSEC-v2021-01-15_CM).dat",
						  "Sinclair ZX Spectrum - Compilations - Applications - [TRD] (TOSEC-v2021-01-15_CM).dat",
						  "Sinclair ZX Spectrum - Compilations - Demos - [TRD] (TOSEC-v2021-01-15_CM).dat",
						  "Sinclair ZX Spectrum - Compilations - Educational - [TRD] (TOSEC-v2021-01-15_CM).dat",
						  "Sinclair ZX Spectrum - Compilations - Games - [TRD] (TOSEC-v2021-01-15_CM).dat",
						  "Sinclair ZX Spectrum - Compilations - Magazines - [TRD] (TOSEC-v2021-01-15_CM).dat",
						  "Sinclair ZX Spectrum - Compilations - Mixed - [TRD] (TOSEC-v2021-01-15_CM).dat",
						  "Sinclair ZX Spectrum - Covertapes - [TRD] (TOSEC-v2021-01-15_CM).dat",
						  "Sinclair ZX Spectrum - Demos - [TRD] (TOSEC-v2021-01-15_CM).dat",
						  "Sinclair ZX Spectrum - Documentation - [TRD] (TOSEC-v2021-01-15_CM).dat",
						  "Sinclair ZX Spectrum - Educational - [TRD] (TOSEC-v2021-01-15_CM).dat",
						  "Sinclair ZX Spectrum - Games - [TRD] (TOSEC-v2021-01-15_CM).dat",
						  "Sinclair ZX Spectrum - Magazines - [TRD] (TOSEC-v2021-01-15_CM).dat");

	makeList($spectrum_d40, "spectrum_d40_flop", "Sinclair ZX Spectrum D40 floppy disks (TOSEC)", "flop", "floppy_5_25", 2);
	makeList($spectrum_d80, "spectrum_d80_flop", "Sinclair ZX Spectrum D80 floppy disks (TOSEC)", "flop", "floppy_3_5", 2);
	makeList($spectrum_mgt, "spectrum_mgt_flop_tosec", "ZX Spectrum MGT DISCiPLE/+D disks (TOSEC)", "flop", "floppy_3_5", 2);
	makeList($spectrum_trd, "spectrum_betadisc_tosec", "Sinclair ZX Spectrum Beta Disc / TR-DOS disk images (TOSEC)", "flop", "floppy_5_25", 2);

	$primo_cass = array("Microkey Primo - Applications - [PTP] (TOSEC-v2011-09-04_CM).dat",
						"Microkey Primo - Applications - [WAV] (TOSEC-v2011-09-04_CM).dat",
						"Microkey Primo - Demos - [PTP] (TOSEC-v2011-09-04_CM).dat",
						"Microkey Primo - Docs - [PTP] (TOSEC-v2011-09-04_CM).dat",
						"Microkey Primo - Educational - [PTP] (TOSEC-v2011-09-04_CM).dat",
						"Microkey Primo - Games - [PTP] (TOSEC-v2011-09-04_CM).dat",
						"Microkey Primo - Games - [WAV] (TOSEC-v2011-09-04_CM).dat");

	$primo_flop = array("Microkey Primo - Applications - [D64] (TOSEC-v2011-09-04_CM).dat");

	makeList($primo_cass, "primo_cass", "Microkey Primo cassettes (TOSEC)", "cass", "primo_cass", 2);
	makeList($primo_flop, "primo_flop", "Microkey Primo floppy disks (TOSEC)", "flop", "floppy_5_25", 2);
?>
