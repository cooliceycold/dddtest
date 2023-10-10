<?php
/**
 * PanDownload 网页复刻版，PHP 语言版配置文件
 * ！！！请勿修改本文件，如果手动修改后再在后台设置，可能导致config.php文件被清空！！！
 *
 * @author Yuan_Tuo <yuantuo666@gmail.com>
 * @link https://github.com/yuantuo666/baiduwp-php
 */
require_once "./common/invalidCheck.php";

const programVersion = '3.0.2';
const Sitename = 'Iceydownload';

const Cookie = 'XFI=0fad4241-26b9-8ff5-711f-64b08810e1bf; XFCS=4E1AFBFA23C6BA46763BD4810DC19F72C256BE479E14810C84CAEA339C65612B; XFT=wpjLES5wNnUWXoOs+MGrezdpHxWNZlxKUABy9LATrrM=; BAIDU_WISE_UID=wapp_1695719335128_166; ZFY=XkRLEO59Re64YAllimdJFiea8cKrAJUYURg8NDnGxyE:C; newlogin=1; BAIDUID=E9AA20F23E6784190E1E0B8E72EA725D:FG=1; BAIDUID_BFESS=E9AA20F23E6784190E1E0B8E72EA725D:FG=1; BDUSS=5BQ1RoZENhQnFmT21tdXE2ZnU5flVDaUZnWlRCM0dwRXItZVB2fkxLZkZ4ejFsRVFBQUFBJCQAAAAAAAAAAAEAAACaenGOwNa527XEsKK60wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMU6FmXFOhZlcX; BDUSS_BFESS=5BQ1RoZENhQnFmT21tdXE2ZnU5flVDaUZnWlRCM0dwRXItZVB2fkxLZkZ4ejFsRVFBQUFBJCQAAAAAAAAAAAEAAACaenGOwNa527XEsKK60wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMU6FmXFOhZlcX; STOKEN=7bfe652a184da1af730424d7811e55e911775da098886555b99c9e5046211479; PANWEB=1; Hm_lvt_7a3960b6f067eb0085b7f96ff5e660b0=1695862950,1696032325,1696214974; BDCLND=QgvyYsUTUmQa0NwAbeLppbjkABQy0ZE17VeV3ziKOHY%3D; RT="z=1&dm=baidu.com&si=4273acd5-27a1-4aeb-b92a-228adb6b3d7d&ss=lngxgkjc&sl=3&tt=3ox&bcn=https%3A%2F%2Ffclog.baidu.com%2Flog%2Fweirwood%3Ftype%3Dperf&ld=5dm&ul=app&hd=aqa"; csrfToken=eT2YrnhfypaOpdr2ZLkG6y_Z; PANPSC=14410268478459663197%3ACU2JWesajwDDXziI9D2QYKPTzGELv%2B1dmGjwch6H1qEPHj5gTuY%2BiTES%2FoCVKIKdymkpECke1UYr2wqYbSNJzI7%2BuszIM%2FQFatedeySBtiRE2OlLZIpvWm0rX84ZNRi4BLc2mHp8YYhyx4n1zr2IJ5C9qgHiau%2Fla7VX5fYmxGfiLaLUl0KD5CU9WZIh7iQiMLV0n1eY2noBDChpkEtqiw%3D%3D; ndut_fmt=0BD5019A9EC0C636061D80DA4C6F2CB9CAFD814E311CA845FEB210439306722B; ab_sr=1.0.1_ODk2Yjc5YTNkNjAxMjI4NGZlMWY4ZTY2ZGZiMmVhMTg1NTgzNWQxZDhkZTQ2OTJlOWY2ZmM3ZTEyNjcxOTY2ZjhjMjJjZWU1OTYxMTVlMjQxYzg1MzJiNDQ0ZTk0NDkyZTBmMThkNmI2NDJiZjQ2ZmUwMmE3NmI1N2YzNDdiM2M3MWUyNjQwNjY2ZWRkNmYwYjRiODFmYzgxMWU5ZTRhMmVjNDlkNDAyMDM0ODNlMzc3ZWIwZTdmMzE4Y2UwMTNk';
const SVIP_BDUSS = '5BQ1RoZENhQnFmT21tdXE2ZnU5flVDaUZnWlRCM0dwRXItZVB2fkxLZkZ4ejFsRVFBQUFBJCQAAAAAAAAAAAEAAACaenGOwNa527XEsKK60wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMU6FmXFOhZlcX';
const SVIP_STOKEN = '7bfe652a184da1af730424d7811e55e911775da098886555b99c9e5046211479';

const IsCheckPassword = false;
const Password = 'icey';
const Footer = <<<'FoOtEr_Made_By_YuanTuo'

FoOtEr_Made_By_YuanTuo;
const APP_ID = '250528';
const DEBUG = false;

const USING_DB = false;
const DbConfig = array("servername" => "mysql.sqlpub.com:3306", "username" => "bdwpspeed", "DBPassword" => "ed416fa5efc27454", "dbname" => "bdwpspeed", "dbtable" => "bdwp");

const ADMIN_PASSWORD = 'aini1314';
const DownloadTimes = 10;
const DownloadLinkAvailableTime = 8;
const SVIPSwitchMod = 0;

const DefaultLanguage = 'zh-CN';
