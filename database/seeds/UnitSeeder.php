<?php

use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::truncate();
        
        \DB::statement("
            INSERT IGNORE INTO `unit` (`id`, `kode_unit`, `no_polisi`, `tipe_unit`, `jatah_solar`) VALUES
            (1, 'S-637', 'DA 7972 HH', 'Bus 27 SEAT (AC)', '42 LITER'),
            (2, 'S-638', 'DA 7975 HH', 'Bus 27 SEAT (AC)', '36 LITER'),
            (3, 'S-639', 'DA 7980 HH', 'Bus 27 SEAT (AC)', '30 LITER'),
            (4, 'S-640', 'DA 7976 HH', 'Bus 27 SEAT (AC)', '20 LITER'),
            (5, 'S-613', 'DA 7079 HB', 'BUS 32 SEAT (AC)', '20 LITER'),
            (6, 'S-611', 'KH 7012 K', 'BUS 32 SEAT (AC)', '23 LITER'),
            (7, 'S-612', 'KH 7010 K', 'BUS 32 SEAT (AC)', '23 LITER'),
            (8, 'S-878', 'KH 7011 K', 'BUS 32 SEAT (AC)', '40 LITER'),
            (9, 'S-652', 'DA 7081 HB', 'BUS 32 SEAT (AC)', '30 LITER'),
            (10, 'S-653', 'DA 7080 HB', 'BUS 32 SEAT (AC)', '50 LITER'),
            (11, 'S-654', 'DA 7078 HB', 'BUS 32 SEAT (AC)', '40 LITER'),
            (12, 'S-655', 'DA 7082 HB', 'BUS 32 SEAT (AC)', '42 LITER'),
            (13, 'S-581', 'DA 7975 HG', 'ELF (AC)', '30 LITER'),
            (14, 'S-616', 'DA 8096 HH', 'BUS 32 SEAT (AC)', '30 LITER'),
            (15, 'S-615', 'DA 8095 HH', 'BUS 32 SEAT (AC)', '30 LITER'),
            (16, 'S-662', 'DA 9291 HJ', 'BUS 27 SEAT 4X4 (AC)', '23 LITER'),
            (17, 'S-674', 'DA 8354 HA', 'BUS 27 SEAT 4X4 (AC)', '23 LITER'),
            (18, 'S-562', 'DA 7806 HH', 'ELF (AC)', '25 LITER'),
            (19, 'S-564', 'DA 7807 HH', 'ELF (AC)', '30 LITER'),
            (20, 'S-565', 'DA 7908 HH', 'ELF (AC)', '18 LITER'),
            (21, 'S-864', 'DA 8103 HH', 'L300 STATION WAGON AC', '40 LITER'),
            (22, 'S-686', 'DA 7095 HB', 'MANHAULER 4X4 AC (BUILD UP)', '30 LITER'),
            (23, 'S-688', 'DA 7094 HB', 'MANHAULER 4X4 AC (BUILD UP)', '30 LITER'),
            (24, 'S-687', 'DA 7093 HB', 'MANHAULER 4X4 AC (BUILD UP)', '30 LITER'),
            (25, 'S-689', 'DA 7091 HB', 'MANHAULER 4X4 AC (BUILD UP)', '30 LITER'),
            (26, 'S-645', 'DA 7130 HB', 'Bus 27 SEAT (AC)', '33 LITER'),
            (27, 'S-582', 'DA 7956 HG', 'ELF (AC)', '50 LITER'),
            (28, 'S-583', 'DA 7965 HG', 'ELF (AC)', '25 LITER'),
            (29, 'S-584', 'DA 7972 HH', 'ELF (AC)', '35 LITER'),
            (30, 'S-587', 'DA 7969 HG', 'ELF (AC)', '28 LITER'),
            (31, 'S-635', 'DA 7268 HB', 'Bus 30 SEAT (AC)', '43 LITER'),
            (32, 'S-636', 'DA 7270 HB', 'Bus 30 SEAT (AC)', '55 LITER'),
            (33, 'S-876', 'DA 7293 HB', 'Bus 30 SEAT (AC)', '40 LITER'),
            (34, 'S-604', 'DA 7296 HB', 'Bus 30 SEAT (AC)', '28 LITER'),
            (35, 'S-614', 'DA 7320 HB', 'Bus 30 SEAT (AC)', '41 LITER'),
            (36, 'S-888', 'DA 7303 HB', 'Bus 30 SEAT (AC)', '40 LITER'),
            (37, 'S-617', 'DA 7315 HB', 'Bus 30 SEAT (AC)', '37 LITER'),
            (38, 'S-625', 'DA 7316 HB', 'Bus 30 SEAT (AC)', '45 LITER'),
            (39, 'S-559', 'DA 7329 HB', 'Bus 30 SEAT (AC)', '29 LITER'),
            (40, 'S-558', 'DA 7324 HB', 'Bus 30 SEAT (AC)', '53 LITER'),
            (41, 'S-532', 'DA 7348 HB', 'Bus 30 SEAT (AC)', '43 LITER'),
            (42, 'S-535', 'DA 7349 HB', 'Bus 30 SEAT (AC)', '38 LITER'),
            (43, 'S-540', 'DA 7370 HB', 'Bus 30 SEAT (AC)', '38 LITER'),
            (44, 'S-538', 'DA 7363 HB', 'Bus 30 SEAT (AC)', '35 LITER'),
            (45, 'S-668', 'DA 7368 HB', 'BUS 30 SEAT (AC)', '43 LITER'),
            (46, 'S-557', 'DA7365 HB', 'BUS 30 SEAT (AC)', '53 LITER'),
            (47, 'S-660', 'DA 7372 HB', 'BUS 30 SEAT (AC)', '50 LITER'),
            (48, 'S-542', 'DA 7383 HB', 'BUS 30 SEAT (AC)', '52 LITER'),
            (49, 'S-576', 'DA 7385 HB', 'ELF 4X2 (AC) 16 SEAT', '30 LITER'),
            (50, 'S-577', 'DA 7386 HB', 'ELF 4X2 (AC) 16 SEAT', '30 LITER'),
            (51, 'S-861', 'DA 7390 HB', 'ELF 4X2 (AC) 16 SEAT', '40 LITER'),
            (52, 'S-544', 'DA 7401 HB', 'BUS 30 SEAT (AC)', '35 LITER'),
            (53, 'S-547', 'DA 7402 HB', 'BUS 30 SEAT (AC)', '60 LITER'),
            (54, 'S-875', 'DA 7405 HB', 'ELF 4X2 (AC) 14 SEAT', '40 LITER'),
            (55, 'S-874', 'DA 7404 HB', 'ELF 4X2 (AC) 14 SEAT', '40 LITER'),
            (56, 'S-845', 'DA 7423 HB', 'MANHAULER 4X4 AC (BUILD UP)', '40 LITER'),
            (57, 'S-846', 'DA 7424 HB', 'MANHAULER 4X4 AC (BUILD UP)', '40 LITER'),
            (58, 'S-867', 'DA 7387 HB', 'ELF 4X2 (AC) 16 SEAT', '40 LITER'),
            (59, 'S-847', 'DA 7427 HB', 'MANHAULER 4X4 AC (BUILD UP)', '40 LITER'),
            (60, 'S-848', 'DA 7428 HB', 'MANHAULER 4X4 AC (BUILD UP)', '50 LITER'),
            (61, 'S-849', 'DA 7426 HB', 'MANHAULER 4X4 AC (BUILD UP)', '40 LITER'),
            (62, 'S-870', 'DA 7406 HB', 'ELF 4X2 (AC) 16 SEAT', '40 LITER'),
            (63, 'S-871', 'DA 7408 HB', 'ELF 4X2 (AC) 16 SEAT', '40 LITER'),
            (64, 'S-777', 'DA 7374 HB', 'BUS (AC)', 'FULL'),
            (65, 'S-527', 'DA 7420 HB', 'BUS 30 SEAT (AC)', '0'),
            (66, 'S-699', 'DA 7349 FE', 'MANHAULER 4X4 AC (BUILD UP)', '50 LITER'),
            (67, 'S-670', 'DA 7356 FE', 'BUS 28 SEAT (AC)', '43 LITER'),
            (68, 'S-695', 'DA7350 FE', 'MANHAULER 4X4 AC (BUILD UP)', '50 LITER'),
            (69, 'S-659', 'DA 7451 HB', 'BUS 30 SEAT (AC)', '31 LITER'),
            (70, 'S-684', 'DA 7450 HB', 'BUS 30 SEAT (AC)', '33 LITER'),
            (71, 'S-671', 'DA 7357 FE', 'BUS 28 SEAT (AC)', '43 LITER'),
            (72, 'S-569', 'DA 7457 HB', 'BUS 30 SEAT (AC)', '18 LITER'),
            (73, 'S-567', 'DA 7456 HB', 'BUS 30 SEAT (AC)', '18 LITER'),
            (74, 'S-555', 'DA 7459 HB', 'BUS 30 SEAT (AC)', '0'),
            (75, 'S-696', 'DA 7351 FE', 'MANHAULER 4X4 AC (BUILD UP)', '50 LITER'),
            (76, 'S-685', 'DA 7352 FE', 'MANHAULER 4X4 AC (BUILD UP)', '33 LITER'),
            (77, 'S-697', 'DA 7347 FE', 'MANHAULER 4X4 AC (BUILD UP)', '50 LITER'),
            (78, 'S-669', 'DA 7481 HB', 'BUS 30 SEAT (AC)', '43 LITER'),
            (79, 'S-672', 'DA 7359 FE', 'BUS 28 SEAT (AC)', '66 LITER'),
            (80, 'S-673', 'DA 7360 FE', 'BUS 28 SEAT (AC)', '43 LITER'),
            (81, 'S-698', 'DA 7348 FE', 'MANHAULER 4X4 AC (BUILD UP)', '23 LITER'),
            (82, 'S-525', 'DA 7487 HB', 'BUS 30 SEAT (AC)', '0'),
            (83, 'S-667', 'DA 7363 FE', 'BUS 30 SEAT (AC)', '20 LITER'),
            (84, 'S-526', 'DA 7493 HB', 'BUS 30 SEAT (AC)', '0'),
            (85, 'S-858', 'DA 7431 HB', 'ELF 20 SEAT (AC)', '40 LITER'),
            (86, 'S-316', 'DA 9340 HJ', 'STRADA MINI MAINHAUL', '0'),
            (87, 'S-816', 'DA 1487 HE', 'KIJANG INNOVA', '23 LITER'),
            (88, 'S-817', 'DA 1520 HE', 'KIJANG INNOVA', '23 LITER'),
            (89, 'S-171', 'DA 8489 HB', 'STRADA TRITON', '0'),
            (90, 'S-221', 'DA 9072 CH', 'STRADA TRITON', '0'),
            (91, 'S-222', 'DA 9604 CM', 'STRADA TRITON', '0'),
            (92, 'S-278', 'DA 8629 HB', 'STRADA TRITON', '0'),
            (93, 'S-235', 'DA 9321 HJ', 'STRADA TRITON', '0'),
            (94, 'S-128', 'DA 8470 HA', 'STRADA TRITON', '0'),
            (95, 'S-234', 'DA 9649 CM', 'STRADA TRITON', '0'),
            (96, 'S-232', 'DA 9647 CM', 'STRADA TRITON', '0'),
            (97, 'S-168', 'DA 8258 CJ', 'STRADA TRITON', '0'),
            (98, 'S-187', 'DA 8912 CJ', 'STRADA TRITON', '0'),
            (99, 'S-141', 'DA 9166 HG', 'STRADA TRITON', '0'),
            (100, 'S-243', 'DA 9323 HJ', 'STRADA TRITON', '0'),
            (101, 'S-239', 'DA 9602 CM', 'STRADA TRITON', '0'),
            (102, 'S-238', 'DA 9607 CM', 'STRADA TRITON', '0'),
            (103, 'S-241', 'DA 9651 CM', 'STRADA TRITON', '0'),
            (104, 'S-299', 'DA 7049 AZ', 'PAJERO SPORT', '0'),
            (105, 'S-424', 'DA 1326 HF', 'STRADA MINI MAINHAUL', '0'),
            (106, 'S-425', 'DA 1325 HF', 'STRADA MINI MAINHAUL', '0'),
            (107, 'S-214', 'DA 8194 FE', 'STRADA TRITON', '0'),
            (108, 'S-373', 'DA 8503 FF', 'STRADA TRITON', '0'),
            (109, 'S-264', 'DA 9367 HH', 'STRADA TRITON', '0'),
            (110, 'S-121', 'DA 9613 HH', 'STRADA TRITON', '0'),
            (111, 'S-175', 'DA 8492 HC', 'STRADA TRITON', '0'),
            (112, 'S-375', 'DA 8510 FF', 'STRADA TRITON', '0'),
            (113, 'S-805', 'DA 1801 HB', 'PANTHER FULL CABIN', '30 LITER'),
            (114, 'S-320', 'DA 8202 FF', 'STRADA TRITON', '0'),
            (115, 'S-822', 'DA 9080 CL', 'STRADA TRITON', '25 LITER'),
            (116, 'S-184', 'DA 8529 HB', 'STRADA TRITON', '0'),
            (117, 'S-826', 'KH 8453 K', 'STRADA TRITON', '25 LITER'),
            (118, 'S-827', 'KH 8438 K', 'STRADA TRITON', '23 LITER'),
            (119, 'S-820', 'DA 8180 HG', 'KIJANG INNOVA', '23 LITER'),
            (120, 'S-240', 'DA 8203 FF', 'STRADA TRITON', '0'),
            (121, 'S-119', 'DA 8108 HD', 'STRADA TRITON', '0'),
            (122, 'S-233', 'DA 8206 FF', 'STRADA TRITON', '0'),
            (123, 'S-427', 'DA 8268 FF', 'STRADA TRITON', '0'),
            (124, 'S-428', 'DA 8267 FF', 'STRADA TRITON', '0'),
            (125, 'S-429', 'DA 8265 FF', 'STRADA TRITON', '25 LITER'),
            (126, 'S-136', 'DA 8269 HA', 'STRADA MINI MAINHAUL', '0'),
            (127, 'S-183', 'DA 8529 HC', 'STRADA TRITON', '0'),
            (128, 'S-818', 'DA 8743 HC', 'STRADA TRITON', '23 LITER'),
            (129, 'S-155', 'DA 8428 CI', 'STRADA TRITON', '0'),
            (130, 'S-163', 'DA 8245 CJ', 'STRADA TRITON', '0'),
            (131, 'S-310', 'DA 9631 HH', 'STRADA TRITON', '0'),
            (132, 'S-194', 'DA 8079 HC', 'STRADA TRITON', '0'),
            (133, 'S-432', 'DA 8261 FF', 'STRADA TRITON', '0'),
            (134, 'S-433', 'DA 8264 FF', 'STRADA TRITON', '30 LITER'),
            (135, 'S-154', 'DA 8427 CI', 'STRADA TRITON', '0'),
            (136, 'S-160', 'DA 8575 CI', 'STRADA TRITON', '0'),
            (137, 'S-379', 'DA 8509 FF', 'STRADA TRITON', '0'),
            (138, 'S-201', 'DA 8212 HH', 'PAJERO SPORT', '0'),
            (139, 'S-192', 'DA 8580 HC', 'STRADA TRITON', '0'),
            (140, 'S-185', 'DA 8563 HB', 'STRADA TRITON', '0'),
            (141, 'S-188', 'DA 8913 CJ', 'STRADA TRITON', '0'),
            (142, 'S-331', 'DA 9630 HH', 'STRADA TRITON', '0'),
            (143, 'S-472', 'DA 8209 HA', 'STRADA TRITON', '0'),
            (144, 'S-153', 'DA 8426 CI', 'STRADA TRITON', '0'),
            (145, 'S-343', 'DA 9463 HH', 'STRADA TRITON', '0'),
            (146, 'S-315', 'DA 8256 CD', 'STRADA TRITON', '0'),
            (147, 'S-181', 'DA 8530 HB', 'STRADA TRITON', '0'),
            (148, 'S-199', 'DA 8741 HB', 'STRADA TRITON', '0'),
            (149, 'S-341', 'KH 8454 K', 'STRADA TRITON', '0'),
            (150, 'S-132', 'DA 8489 HA', 'STRADA TRITON', '0'),
            (151, 'S-147', 'DA 9506 HG', 'STRADA TRITON', '0'),
            (152, 'S-350', 'DA 9129 YA', 'STRADA TRITON', '0'),
            (153, 'S-114', 'DA 8103 HD', 'STRADA TRITON', '0'),
            (154, 'S-430', 'DA 8259 FF', 'STRADA TRITON', '30 LITER'),
            (155, 'S-431', 'DA 8260 FF', 'STRADA TRITON', '25 LITER'),
            (156, 'S-362', 'DA 9369 HE', 'STRADA TRITON', '0'),
            (157, 'S-134', 'DA 8625 ZD', 'STRADA TRITON', '0'),
            (158, 'S-371', 'DA 8513 FF', 'STRADA TRITON', '0'),
            (159, 'S-380', 'DA 8212 CP', 'STRADA MINI MAINHAUL', '0'),
            (160, 'S-193', 'DA 8580 HB', 'STRADA TRITON', '0'),
            (161, 'S-821', 'KH 8446 K', 'STRADA TRITON', '23 LITER'),
            (162, 'S-385', 'DA 8124 CP', 'STRADA MINI MAINHAUL', '25 LITER'),
            (163, 'S-179', 'DA 8528 HC', 'STRADA TRITON', '0'),
            (164, 'S-245', 'DA 9364 HH', 'STRADA TRITON', '0'),
            (165, 'S-376', 'DA 8506 FF', 'STRADA TRITON', '0'),
            (166, 'S-504', 'DA 1841 HE', 'KIJANG INNOVA', '25 LITER'),
            (167, 'S-808', 'DA 8092 HH', 'L300 STATION WAGON AC', '23 LITER'),
            (168, 'S-809', 'DA 8093 HH', 'L300 STATION WAGON AC', '23 LITER'),
            (169, 'S-873', 'DA 1970 HB', 'L300 STATION WAGON AC', '40 LITER'),
            (170, 'S-173', 'DA 8490 HB', 'STRADA TRITON', '0'),
            (171, 'S-215', 'DA 8195 FF', 'STRADA TRITON', '0'),
            (172, 'S-127', 'DA 8468 HA', 'STRADA TRITON', '0'),
            (173, 'S-242', 'DA 9653 CM', 'STRADA TRITON', '0'),
            (174, 'S-148', 'DA 8124 CI', 'STRADA TRITON', '0'),
            (175, 'S-150', 'DA 8123 CI', 'STRADA TRITON', '0'),
            (176, 'S-151', 'DA 8125 CI', 'STRADA TRITON', '0'),
            (177, 'S-152', 'DA 8425 CI', 'STRADA TRITON', '0'),
            (178, 'S-342', 'DA 8627 HB', 'STRADA TRITON', '0'),
            (179, 'S-815', 'DA 8628 HB', 'STRADA TRITON', '0'),
            (180, 'S-210', 'DA  8193 FF', 'STRADA TRITON', '0'),
            (181, 'S-471', 'DA 8021 YY', 'STRADA TRITON', '0'),
            (182, 'S-470', 'DA 9345 HJ', 'STRADA TRITON', '0'),
            (183, 'S-372', 'DA 8512 FF', 'STRADA TRITON', '0'),
            (184, 'S-103', 'DA 8204 FF', 'STRADA TRITON', '0'),
            (185, 'S-112', 'KH 8447 K', 'STRADA TRITON', '0'),
            (186, 'S-365', 'DA 9358 HH', 'STRADA TRITON', '0'),
            (187, 'S-382', 'DA 8215 CP', 'STRADA MINI MAINHAUL', '0'),
            (188, 'S-272', 'DA 9320 HJ', 'STRADA TRITON', '0'),
            (189, 'S-273', 'DA 9605 CM', 'STRADA TRITON', '0'),
            (190, 'S-276', 'DA 9650 CM', 'STRADA TRITON', '0'),
            (191, 'S-159', 'DA 8573 CI', 'STRADA TRITON', '0'),
            (192, 'S-165', 'DA 8251 CJ', 'STRADA TRITON', '0'),
            (193, 'S-271', 'DA 9610 YY', 'STRADA TRITON', '0'),
            (194, 'S-231', 'DA 8196 FF', 'STRADA TRITON', '0'),
            (195, 'S-129', 'DA 8465 HA', 'STRADA TRITON', '0'),
            (196, 'S-133', 'DA 8624 ZD', 'STRADA TRITON', '0'),
            (197, 'S-281', 'DA 9606 CM', 'STRADA TRITON', '0'),
            (198, 'S-164', 'DA 8250 CJ', 'STRADA TRITON', '0'),
            (199, 'S-167', 'DA 8254 CJ', 'STRADA TRITON', '0'),
            (200, 'S-107', 'DA 8209 FF', 'STRADA TRITON', '0'),
            (201, 'S-156', 'DA 8129 CI', 'STRADA TRITON', '0'),
            (202, 'S-169', 'DA 8079 HA', 'STRADA TRITON', '0'),
            (203, 'S-819', 'KH 8453 KB', 'STRADA TRITON', '0'),
            (204, 'S-832', 'KH 8449 K', 'STRADA TRITON', '0'),
            (205, 'S-720', 'DA 9370 HH', 'STRADA TRITON', '0'),
            (206, 'S-701', 'DA 9081 CL', 'STRADA TRITON', '0'),
            (207, 'S-174', 'DA 8486 HC', 'STRADA TRITON', '0'),
            (208, 'S-115', 'DA 8105 HD', 'STRADA TRITON', '0'),
            (209, 'S-381', 'DA 8205 FF', 'STRADA TRITON', '0'),
            (210, 'S-364', 'KH 8440 K', 'STRADA TRITON', '0'),
            (211, 'S-702', 'KH 8445 K', 'STRADA TRITON', '0'),
            (212, 'S-117', 'DA 8106 HD', 'STRADA TRITON', '0'),
            (213, 'S-178', 'DA 8506 HC', 'STRADA TRITON', '0'),
            (214, 'S-700', 'DA 7717 AZ', 'PAJERO SPORT', '0'),
            (215, 'S-204', 'DA 1927 YY', 'PAJERO SPORT', '0'),
            (216, 'S-138', 'DA 8207 FF', 'STRADA TRITON', '0'),
            (217, 'S-246', 'DA 8737 HA', 'STRADA TRITON', '0'),
            (218, 'S-247', 'KH 8471 K', 'STRADA TRITON', '0'),
            (219, 'S-402', 'KH 8443 K', 'STRADA TRITON', '0'),
            (220, 'S-403', 'KH 8472 K', 'STRADA TRITON', '0'),
            (221, 'S-423', 'DA 1290 HF', 'STRADA MINI MAINHAUL', '0'),
            (222, 'S-426', 'DA 8061 HD', 'STRADA MINI MAINHAUL', '0'),
            (223, 'S-374', 'DA 8504 FF', 'STRADA TRITON', '0'),
            (224, 'S-710', 'DA 8736 HA', 'STRADA TRITON', '0'),
            (225, 'S-591', 'DA 7516 HB', 'BUS 32 SEAT (AC)', '0'),
            (226, 'S-592', 'DA 7517 HB', 'BUS 32 SEAT (AC)', '0'),
            (227, 'S-593', 'DA 7518 HB', 'BUS 32 SEAT (AC)', '0'),
            (228, 'S-594', 'DA 7520 HB', 'BUS 32 SEAT (AC)', '0'),
            (229, 'S-596', 'DA 7531 HB', 'BUS 32 SEAT (AC)', '0'),
            (230, 'S-595', 'DA 7521 HB', 'BUS 32 SEAT (AC)', '0'),
            (231, 'S-597', 'DA 7536 HB', 'BUS 32 SEAT (AC)', '0'),
            (232, 'S-090', '-', 'MANHAULER 4X4 AC (BUILD UP)', '0'),
            (233, 'S-091', '-', 'MANHAULER 4X4 AC (BUILD UP)', '0'),
            (234, 'S-145', 'DA 7061 HG', 'STRADA TRITON', '0'),
            (235, 'ACF-075', 'DA 9040 BK', 'HILUXDOUBLECABIN', '0'),
            (236, 'ACF-080', 'DA 9514 BK', 'HILUXDOUBLECABIN', '0'),
            (237, 'ADM-001', 'DA 9117 CG', 'PS100', '0'),
            (238, 'AKM-001', 'DA9391CA', 'HILUX', '0'),
            (239, 'BEL-005', 'DA7710HC', 'RANGER', '0'),
            (240, 'BEL-006', 'DA7028HG', 'EVEREST', '0'),
            (241, 'BEL-008', 'DA9453CA', 'HILUX', '0'),
            (242, 'BEL-009', 'DA7911F', 'FORDDC', '0'),
            (243, 'BEL-010', 'DA9647CA', 'HILUX', '0'),
            (244, 'BEL-011', 'DA9808BN', 'DOUBLECABINTRITON', '0'),
            (245, 'BEL-012', 'DA9809BN', 'DOUBLECABINTRITON', '0'),
            (246, 'BMC-002', 'DA8074LF', 'TRITON', '0'),
            (247, 'BMC-003', 'DA8075LF', 'TRITON', '0'),
            (248, 'BMC-004', 'DA8076LF', 'TRITON', '0'),
            (249, 'BMC-005', 'DA1307LF', 'TRITON', '0'),
            (250, 'BMC-006', 'DA1308LF', 'TRITON', '0'),
            (251, 'BMC-007', 'DA1472PP', 'TRITON', '0'),
            (252, 'BMC-008', 'DA8339HG', 'PS100-MINIBUS', '0'),
            (253, 'BMC-009', 'DA7730HG', 'PAJERO', '0'),
            (254, 'BMC-010', 'DA8627PP', 'TRITON', '0'),
            (255, 'BMC-011', 'DA8168CD', 'TRITON', '0'),
            (256, 'BMC-012', 'DA8169CD', 'TRITON', '0'),
            (257, 'CR-HEX001', 'DA008548', 'CWB45', '0'),
            (258, 'CR-HEX002', 'DA008547', 'CWB45', '0'),
            (259, 'CT007-MNK', 'KT8888KF', 'CA1310', '0'),
            (260, 'DHN-003', 'DA9251ZC', 'BT50', '0'),
            (261, 'DHN-009', 'DA9003ZD', 'BT50', '0'),
            (262, 'DHN-010', 'DA9252ZC', 'BT50', '0'),
            (263, 'DKT-016', 'DA9272TH', 'RANGER', '0'),
            (264, 'DKT-019', 'DA9265TH', 'L200', '0'),
            (265, 'DKT-020', 'DA9309TH', 'L200', '0'),
            (266, 'DSS-001', 'DA9042YA', 'DOUBLECABINTRITON', '0'),
            (267, 'DSS-002', 'DA9371HE', 'DOUBLECABINTRITON', '0'),
            (268, 'DSS-003', 'DA9184HG', 'ELF', '0'),
            (269, 'DSS-004', 'DA1115TK', 'DOUBLECABINTRITON', '0'),
            (270, 'DSS-006', 'DA8240H', 'ELF', '0'),
            (271, 'DSS-007', 'DA9229YA', 'HILUXDOUBLECABIN', '0'),
            (272, 'FJ-057', 'DA9703BI', 'RANGER-DOUBLECABIN', '0'),
            (273, 'FJ-075', 'DA9230BI', 'RANGER-DOUBLECABIN', '0'),
            (274, 'GA-032', 'DA9207YA', 'FORDRANGER', '0'),
            (275, 'GMB-002', 'DA7220AP', 'ELF', '0'),
            (276, 'HAP-007', 'DA9760BO', 'TRITON', '0'),
            (277, 'HAP-008', 'DA9761BO', 'TRITON', '0'),
            (278, 'HAP-011', 'DA7563BG', 'MINIBUS', '0'),
            (279, 'HAP-015', 'DA9871BK', 'TRITON', '0'),
            (280, 'HAP-029', 'DA9653TP', 'TRITON', '0'),
            (281, 'HAP-030', 'DA7558BG', 'ELF', '0'),
            (282, 'HAP-110', 'DA9545CJ', 'HILUXDOUBLECABIN', '0'),
            (283, 'HAP-111', 'DA9152BM', 'TRITON', '0'),
            (284, 'HAP-112', 'DA9190BM', 'TRITON', '0'),
            (285, 'HAP-113', 'DA9630BK', 'TRITON', '0'),
            (286, 'HAP-114', 'DA8430PN', 'TRITON', '0'),
            (287, 'HAP-120', 'DA9637BK', 'TRITON', '0'),
            (288, 'HAP-131', 'DA7952PL', 'ELF', '0'),
            (289, 'HAP-132', 'KH1175K', 'ELF', '0'),
            (290, 'HAP-133', 'DA7066HH', 'PS100-MINIBUS', '0'),
            (291, 'HAP-150', 'DA9546CJ', 'HILUXDOUBLECABIN', '0'),
            (292, 'HAP-151', 'DA9781BK', 'TRITON', '0'),
            (293, 'HAP-152', 'KT1878KH', 'EVEREST', '0'),
            (294, 'HAP-210', 'DA9259PI', 'TRITON', '0'),
            (295, 'HAP-301', 'DA1366YY', 'HILUXDOUBLECABIN', '0'),
            (296, 'HAP-303', 'DA9386PK', 'TRITON', '0'),
            (297, 'HAP-304', 'DA9557BN', 'PS100-MINIBUS', '0'),
            (298, 'HAP-305', 'DA1381WL', 'TRITON', '0'),
            (299, 'HAP-306', 'DA7221TAD', 'EVEREST', '0'),
            (300, 'HAP-335', 'DA8207H', 'ELF', '0'),
            (301, 'ISS-004', 'DA9254ZC', 'BT50', '0'),
            (302, 'ITI-002', 'DA7933HC', 'INNOVA', '0'),
            (303, 'ITI-003', 'DA9877BK', 'DOUBLECABINTRITON', '0'),
            (304, 'ITI-004', 'DA9947BK', 'DOUBLECABINTRITON', '0'),
            (305, 'ITI-005', 'DA7751BG', 'EVEREST', '0'),
            (306, 'ITI-006', 'DA1015HB', 'DOUBLECABINTRITON', '0'),
            (307, 'ITI-007', 'DA7320HH', 'ELF', '0'),
            (308, 'ITI-008', 'DA9289HJ', 'DOUBLECABINTRITON', '0'),
            (309, 'ITI-009', 'DA8183HH', 'ELF', '0'),
            (310, 'ITI-011', 'DA8409HC', 'DOUBLECABINTRITON', '0'),
            (311, 'ITI-012', 'DA8412HC', 'DOUBLECABINTRITON', '0'),
            (312, 'ITI-013', 'DA8413HC', 'DOUBLECABINTRITON', '0'),
            (313, 'ITI-181', 'DA9477HD', 'DOUBLECABINTRITON', '0'),
            (314, 'ITI-182', 'DA9289HJ', 'DOUBLECABINTRITON', '0'),
            (315, 'ITI-183', 'DA8404HC', 'DOUBLECABINTRITON', '0'),
            (316, 'ITI-184', 'DA8409HC', 'DOUBLECABINTRITON', '0'),
            (317, 'ITI-185', 'DA8412HC', 'DOUBLECABINTRITON', '0'),
            (318, 'ITI-186', 'DA8413HC', 'DOUBLECABINTRITON', '0'),
            (319, 'ITI-187', 'DA8183HH', 'ELF', '0'),
            (320, 'KJP-001', 'DA8372YC', 'TRITON', '0'),
            (321, 'KJP-002', 'DA9297AQ', 'BT50', '0'),
            (322, 'KJP-003', 'DA9341HB', 'L200', '0'),
            (323, 'KJP-004', 'DA9881CA', 'FORDRANGER', '0'),
            (324, 'KJP-005', 'DA9881CA', 'FORDRANGER', '0'),
            (325, 'KJP-007', 'DA9041YA', 'TRITON', '0'),
            (326, 'KJP-008', 'DA9961HG', 'STRADATRITON', '0'),
            (327, 'KMK-001', 'DA9316YA', 'MEDIUMBUS4X4PS120', '0'),
            (328, 'KMK-002', 'DA1697YB', 'HILUXDOUBLECABIN', '0'),
            (329, 'KMK-010', 'DA7394HB', 'HILUXDOUBLECABIN', '0'),
            (330, 'KMK-011', 'DA7646HH', 'PS100', '0'),
            (331, 'KMP-001', 'DA9808BN', 'DOUBLECABINTRITON', '0'),
            (332, 'KMP-002', 'DA8381BS', 'TRITON', '0'),
            (333, 'KMP-003', 'DA9615BO', 'DOUBLECABINTRITON', '0'),
            (334, 'KMP-004', 'DA8776AN', 'FORDDC', '0'),
            (335, 'KMP-005', 'DA9315CF', 'ELF-MINIBUS', '0'),
            (336, 'KMP-006', 'DA7664DB', 'DOUBLECABINTRITON', '0'),
            (337, 'KMP-007', 'DA8382BS', 'TRITON', '0'),
            (338, 'KMP-008', 'DA7626AW', 'FORDDC', '0'),
            (339, 'KMP-009', 'DA8483AW', 'L300', '0'),
            (340, 'KMP-010', 'DA9156BS', 'TRITON', '0'),
            (341, 'KMP-011', 'DA8273BL', 'DOUBLECABINTRITON', '0'),
            (342, 'KMP-012', 'DA8473BP', 'TRITON', '0'),
            (343, 'KMP-013', 'DA8021BN', 'DOUBLECABINTRITON', '0'),
            (344, 'KMP-014', 'DA8204BN', 'DOUBLECABINTRITON', '0'),
            (345, 'KMP-015', 'DA1302BL', 'DOUBLECABINTRITON', '0'),
            (346, 'KMP-016', 'DA7612BL', 'ELF-MINIBUS', '0'),
            (347, 'KMP-017', 'DA1714BL', 'K330', '0'),
            (348, 'KMP-018', 'DA8140BR', 'DOUBLECABINTRITON', '0'),
            (349, 'KMP-019', 'DA7647BL', 'ELF-MINIBUS', '0'),
            (350, 'KMP-020', 'DA8120HD', 'TRITON', '0'),
            (351, 'KRS-002', 'DA9249YA', 'STRADATRITON', '0'),
            (352, 'LA-001', 'DA9069HE', 'TRITON', '0'),
            (353, 'LB120-SKB003', 'DA1030WC', 'CW631GNT', '0'),
            (354, 'LV001-MNK', 'DA8949YY', 'PAJERO', '0'),
            (355, 'MMU-001', 'B9524PDA', 'FV415J', '0'),
            (356, 'MP-009', 'DA8190TH', 'MINIBUS', '0'),
            (357, 'MP-012', 'DA9824AY', 'MINIBUS', '0'),
            (358, 'MP-019', 'DA9761AZ', 'MINIBUS', '0'),
            (359, 'PTA-012', 'DA9489CL', 'TRITON', '0'),
            (360, 'PTA-013', 'DA9399BN', 'RANGER', '0'),
            (361, 'PTA-017', 'DA8232HD', 'STRADATRITON', '0'),
            (362, 'PTL-500', 'DA9072CH', 'HILUX', '0'),
            (363, 'PTL-501', 'DA9192BM', 'TRITON', '0'),
            (364, 'PTL-502', 'DA9193BM', 'L200', '0'),
            (365, 'PTL-503', 'DA9193BM', 'TRITON', '0'),
            (366, 'PTL-504', 'DA8147CN', 'TRITON', '0'),
            (367, 'PTL-505', 'DA9182Y', 'ELF', '0'),
            (368, 'PTL-506', 'DA9379TS', 'HILUXDOUBLECABIN', '0'),
            (369, 'PTL-507', 'DA9153PH', 'TRITON', '0'),
            (370, 'PTL-508', 'DA8524CF', 'HILUX', '0'),
            (371, 'PTL-509', 'DA8061CG', 'TRITON', '0'),
            (372, 'PTL-510', 'DA8294CF', 'TRITON', '0'),
            (373, 'PTL-511', 'DA8003TK', 'PS100-MINIBUS', '0'),
            (374, 'PTL-512', 'DA8917CL', 'TRITON', '0'),
            (375, 'PTL-514', 'DA8149CN', 'TRITON', '0'),
            (376, 'PTL-515', 'DA8148CN', 'TRITON', '0'),
            (377, 'PTL-516', 'DA9582CL', 'TRITON', '0'),
            (378, 'RRM-016', 'DA8078YY', 'L200', '0'),
            (379, 'RTP-023', 'DA9060HH', 'TRITON', '0'),
            (380, 'S-202', 'DA8192FF', 'PS100', '0'),
            (381, 'SKB-003', 'DA9387PF', 'MINIBUS', '0'),
            (382, 'SKB-024', 'DA7062PN', 'MINIBUS', '0'),
            (383, 'SL-ESEL002', 'DA9234F', 'RANGER', '0'),
            (384, 'SNC-002', 'DA7122YY', 'MINIBUS', '0'),
            (385, 'SSL-027', 'DA8631FO', 'L200', '0'),
            (386, 'STP-002', 'DA9722HH', 'DOUBLECABINTRITON', '0'),
            (387, 'STP-003', 'DA9722HH', 'DOUBLECABINTRITON', '0'),
            (388, 'SUI-005', 'DA9746BN', 'MINIBUS', '0'),
            (389, 'SUI-007', 'DA7991BJ', 'ELF', '0'),
            (390, 'TDU-004', 'DA8072THB', 'TRITON', '0'),
            (391, 'TDU-005', 'DA7037HB', 'ELF', '0'),
            (392, 'TDU-006', 'DA7162HB', 'ELF', '0'),
            (393, 'TDU-007', 'DA8072HC', 'TRITON', '0'),
            (394, 'TDU-010', 'DA7297HB', 'ELF', '0'),
            (395, 'TDU-011', 'DA8588HG', 'PAJERO', '0'),
            (396, 'TDU-012', 'DA7489HH', 'STRADATRITON', '0'),
            (397, 'TDU-013', 'DA7020HH', 'STRADATRITON', '0'),
            (398, 'TT-001', 'B9433PDA', 'FV415J', '0'),
            (399, 'TU-008', 'DA8358YC', 'TRITON', '0'),
            (400, 'TU-022', 'DA8257HA', 'STRADATRITON', '0'),
            (401, 'TU-053', 'DA9204HE', 'L200', '0'),
            (402, 'TU-081', 'DA9272HG', 'STRADATRITON', '0'),
            (403, 'TU-082', 'DA8536YC', 'STRADATRITON', '0'),
            (404, 'TU-083', 'DA9205HE', 'L200', '0'),
            (405, 'TU-084', 'DA9503HE', 'L200', '0'),
            (406, 'TU-085', 'DA8254HA', 'STRADATRITON', '0'),
            (407, 'TU-086', 'DA9276HG', 'STRADATRITON', '0'),
            (408, 'TU-087', 'DA8663AS', 'BUSCOLTDIESEL', '0'),
            (409, 'TU-091', 'DA9418YA', 'TRITON', '0'),
            (410, 'TU-092', 'DA8436HA', 'STRADATRITON', '0'),
            (411, 'TU-093', 'DA9501HE', 'STRADATRITON', '0'),
            (412, 'TU-094', 'DA8259HA', 'STRADATRITON', '0'),
            (413, 'TU-095', 'DA8247HA', 'STRADATRITON', '0'),
            (414, 'TU-096', 'DA8375HA', 'STRADATRITON', '0'),
            (415, 'TU-105', 'DA7142HB', 'BUSCOLTDIESEL', '0'),
            (416, 'TU-119', 'DA8202H', 'TRITON', '0'),
            (417, 'TU-126', 'DA9624YA', 'STRADATRITON', '0'),
            (418, 'UT-006', 'DA9773BL', 'D-MAX', '0'),
            (419, 'UT-015', 'DA9066HD', 'TRITON', '0'),
            (420, 'UT-044', 'DA9870BJ', 'RANGER', '0'),
            (421, 'UT-047', 'DA9206BK', 'HILINE', '0'),
            (422, 'UT-050', 'DA9945BJ', 'HILINE', '0'),
            (423, 'UT-052', 'DA9831BJ', 'HILINE', '0'),
            (424, 'UT-053', 'DA9874BJ', 'HILINE', '0'),
            (425, 'UT-054', 'DA9117PH', 'TRITON', '0'),
            (426, 'UT-055', 'DA9208BK', 'HILINE', '0'),
            (427, 'UT-056', 'DA9207BK', 'HILINE', '0'),
            (428, 'UT-057', 'DA9710BI', 'HILINE', '0'),
            (429, 'UT-071', 'DA9204BK', 'HILINE', '0'),
            (430, 'UT-072', 'DA9085BR', 'TRITON', '0'),
            (431, 'UT-082', 'DA9082BR', 'TRITON', '0'),
            (432, 'UT-084', 'DA9514BP', 'TRITON', '0'),
            (433, 'UT-091', 'DA9110BH', 'HILINE', '0'),
            (434, 'UT-099', 'DA8986PH', 'MINIBUS', '0'),
            (435, 'UT-101', 'DA9822BI', 'HILINE', '0'),
            (436, 'UT-103', 'DA8772BI', 'AVANZA', '0'),
            (437, 'UT-120', 'DA9993BL', 'RANGER', '0'),
            (438, 'UT-303', 'DA8696PM', 'KIJANGINNOVA', '0'),
            (439, 'UT-902', 'DA9764BN', 'D-MAX', '0'),
            (440, 'UT-903', 'DA8642PM', 'TRITON', '0'),
            (441, 'UT-904', 'DA9315BM', 'ELF-MINIBUS', '0'),
            (442, 'UT-905', 'DA7731BD', 'EVEREST', '0'),
            (443, 'UT-906', 'DA9313BO', 'RANGER', '0'),
            (444, 'UT-907', 'DA9200BK', 'HILINE', '0'),
            (445, 'UT-908', 'DA9836BJ', 'HILINE', '0'),
            (446, 'UT-909', 'DA9230BK', 'RANGER', '0'),
            (447, 'UT-910', 'DA9205BK', 'HILINE', '0'),
            (448, 'UT-911', 'DA9212BK', 'HILINE', '0'),
            (449, 'UT-912', 'DA8390PO', 'D-MAX', '0'),
            (450, 'UT-913', 'DA8391PO', 'D-MAX', '0'),
            (451, 'UT-914', 'DA8393PO', 'D-MAX', '0'),
            (452, 'UT-916', 'DA8406PH', 'KIJANGINNOVA', '0'),
            (453, 'UT-917', 'DA8128PR', 'KIJANGINNOVA', '0'),
            (454, 'UT-919', 'DA8129PQ', 'KIJANGINNOVA', '0'),
            (455, 'UTE-002', 'DA8375HC', 'HILUXDOUBLECABIN', '0'),
            (456, 'UTE-003', 'DA9340HD', 'RANGERDOUBLECABIN', '0'),
            (457, 'UTE-009', 'DA9383CK', 'HILUXDOUBLECABIN', '0'),
            (458, 'UTE-010', 'DA9828BJ', 'RANGERDOUBLECABIN', '0'),
            (459, 'VE-027', 'DA8472', 'STRADA2.5LDC', '0'),
            (460, 'BGA-050', 'DA9390HM', 'PS100', '0'),
            (461, 'ENG-006', 'DA9228HG', 'FORDDC', '0'),
            (462, 'ENG-012', 'DA2457YY', 'BT50', '0'),
            (463, 'ENG-020', 'DA9632YY', 'TRITON', '0'),
            (464, 'ENG-022', 'DA9316HG', 'TRITON', '0'),
            (465, 'FIN-001', 'DA7879HS', 'INNOVA', '0'),
            (466, 'GA-006', 'DA9873BH', 'FORDDC', '0'),
            (467, 'GA-017', 'DA9569HH', 'STRADATRITON', '0'),
            (468, 'GA-021', 'DA3161YY', 'EVEREST', '0'),
            (469, 'GA-022', 'DA8405AO', 'PAJERO', '0'),
            (470, 'GA-027', 'DA2325YY', 'EVEREST', '0'),
            (471, 'GA-028', 'DA7255HG', 'BT50', '0'),
            (472, 'GA-030', 'DA8084YY', 'TRITON', '0'),
            (473, 'GA-101', 'DA9379TS', 'HILUX', '0'),
            (474, 'LC-003', 'DA9279Y', 'PS100', '0'),
            (475, 'LOG-104', 'DA1313YY', 'BT50', '0'),
            (476, 'MSD-003', 'DA1798YY', 'BT50', '0'),
            (477, 'NZW-002', 'KH8502AB', 'BT50', '0'),
            (478, 'PGA-050', 'DA9395TS', 'TRITON', '0'),
            (479, 'PGA-200', 'DA1174WC', 'PS100', '0'),
            (480, 'PLH-005', 'DA1314YY', 'RANGER', '0'),
            (481, 'PLH006', 'DA1322YY', 'BT50', '0'),
            (482, 'PLH-007', 'DA9548HG', 'STRADATRITON', '0'),
            (483, 'PLT-301', 'DA7936HE', 'FORDDC', '0'),
            (484, 'PLT-303', 'DA9229HG', 'STRADATRITON', '0'),
            (485, 'PLT-305', 'DA9930BL', 'BT50', '0'),
            (486, 'PLT-308', 'DA9931BL', 'BT50', '0'),
            (487, 'PLT-309', 'DA2465YY', 'BT50', '0'),
            (488, 'PLT-402', 'DA1939YY', 'STRADATRITON', '0'),
            (489, 'PLT-405', 'DA1235YY', 'RANGER', '0'),
            (490, 'PLT-407', 'DA8338YY', 'STRADATRITON', '0'),
            (491, 'PLT-502', 'DA1205YY', 'STRADATRITON', '0'),
            (492, 'PLT-505', 'DA9493HH', 'STRADATRITON', '0'),
            (493, 'PLT-506', 'DA8168YY', 'BT50', '0'),
            (494, 'PLT-507', 'DA8169YY', 'BT50', '0'),
            (495, 'PLT-607', 'DA9362HH', 'STRADATRITON', '0'),
            (496, 'PLT-801', 'KT8242LJ', 'STRADATRITON', '0'),
            (497, 'PLT-802', 'KT8243LJ', 'STRADATRITON', '0'),
            (498, 'PLT-803', 'KT8245LJ', 'STRADATRITON', '0'),
            (499, 'PLT-806', 'DA7795HG', 'STRADATRITON', '0'),
            (500, 'PLT-902', 'DA9999YP', 'STRADATRITON', '0'),
            (501, 'PMB-002', 'DA9188BN', 'TRITON', '0'),
            (502, 'PRO-106', 'DA9595BO', 'FORDDC', '0'),
            (503, 'PRO-107', 'DA9643HB', 'FORDDC', '0'),
            (504, 'PRO-108', 'DA9608BL', 'BT50', '0'),
            (505, 'PRO-109', 'DA9636BL', 'BT50', '0'),
            (506, 'PRO-110', 'DA9617YY', 'STRADATRITON', '0'),
            (507, 'PRO-203', 'DA8024YY', 'TRITON', '0'),
            (508, 'PRO-302', 'DA9367HH', 'STRADATRITON', '0'),
            (509, 'PRO-304', 'DA9931BP', 'FORDDC', '0'),
            (510, 'PRO-305', 'DA9050BR', 'STRADATRITON', '0'),
            (511, 'PRO-701', 'DA9305BM', 'FORDRANGER', '0'),
            (512, 'PRO-702', 'DA9987BL', 'FORDRANGER', '0'),
            (513, 'PRO-703', 'DA9927BL', 'FORDRANGER', '0'),
            (514, 'PRO-704', 'DA9312BO', 'FORDRANGER', '0'),
            (515, 'PRO-705', 'DA9381BM', 'FORDRANGER', '0'),
            (516, 'PRO-706', 'DA9279HV', 'TRITON', '0'),
            (517, 'PRO-707', 'DA9279HW', 'TRITON', '0'),
            (518, 'PRO-708', 'DA9369HU', 'TRITON', '0'),
            (519, 'PRO-709', 'DA9279HX', 'TRITON', '0'),
            (520, 'PRO-803', 'DA8022BH', 'TRITON', '0'),
            (521, 'PRO-804', 'DA8020BH', 'TRITON', '0'),
            (522, 'PRO-806', 'DA9569HL', 'TRITON', '0'),
            (523, 'PRO-807', 'DA9629YY', 'TRITON', '0'),
            (524, 'PRO-809', 'DA8065YY', 'TRITON', '0'),
            (525, 'PSV-003', 'DA2003YY', 'BT50', '0'),
            (526, 'PSV-103', 'DA9933BP', 'FORDDC', '0'),
            (527, 'PSV-107', 'DA9231BL', 'BT50', '0'),
            (528, 'PSV-110', 'DA9048BR', 'STRADATRITON', '0'),
            (529, 'PSV-205', 'DA9034BR', 'STRADATRITON', '0'),
            (530, 'PSV-208', 'DA9487HH', 'STRADATRITON', '0'),
            (531, 'RCC-001', 'DA7777FH', 'TRITON', '0'),
            (532, 'RCC-003', 'DA1244YY', 'FORDRANGER', '0'),
            (533, 'RCC-005', 'DA9715H', 'PS100', '0'),
            (534, 'RCC-006', 'DA9546HC', 'PS100', '0'),
            (535, 'RCC-007', 'DA9648HC', 'PS120', '0'),
            (536, 'RTP-044', 'DA9407HG', 'PS100', '0'),
            (537, 'SHE-002', 'DA7142HG', 'PAJERO', '0'),
            (538, 'SHE-004', 'DA9009FR', 'BT50', '0'),
            (539, 'SRA-004', 'DA9570BJ', 'RANGER', '0'),
            (540, 'SRA-014', 'DA9306BO', 'FORDRANGER', '0'),
            (541, 'SRA-022', 'DA9228BL', 'BT50', '0'),
            (542, 'SRA-023', 'DA9237BL', 'BT50', '0'),
            (543, 'SRA-024', 'DA9001BM', 'FORDRANGER', '0'),
            (544, 'SRA-029', 'DA9642BL', 'BT50', '0'),
            (545, 'SRA-042', 'DA9103BM', 'FORDRANGER', '0'),
            (546, 'TCO-011', 'DA7176YA', 'ELF', '0'),
            (547, 'TYR-001', 'DA9360HD', 'PAJERO', '0'),
            (548, 'TYR-002', 'DA9307BO', 'RANGER', '0');
        ");
    }
}
