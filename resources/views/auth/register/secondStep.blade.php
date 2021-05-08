@extends('layouts.front.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 d-flex justify-content-end">
                @include('auth.aside',[ 'data'=> 2])
            </div>
            <div class="col-8 second-step">
                <h1>Ваша цель</h1>
                <form action="" class="d-flex flex-column">
                    <div class="d-flex flex-column">
                        <h1>Выберите ваш пол</h1>
                        <div class="gender-select">
                            <div class="gender-item">
                                <input type="radio" name="gender" checked value="male">
                                <label>
                                    <svg width="16" height="38" viewBox="0 0 16 38" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.8679 11.404L11.1091 9.26506C12.3611 8.32424 13.1722 6.83066 13.1722 5.15189C13.1722 2.31105 10.8511 0 7.99785 0C5.14498 0 2.82384 2.31105 2.82384 5.15189C2.82384 6.83102 3.6353 8.32459 4.88762 9.26577L1.12852 11.4075C0.416805 11.814 -0.0155457 12.5735 0.000427807 13.3934L0.0288252 14.6046C0.0405391 15.1044 0.456561 15.4991 0.958486 15.4882C1.46041 15.4765 1.85762 15.062 1.84591 14.5626L1.81751 13.3546C1.81396 13.169 1.92648 13.0379 2.03191 12.9778L6.62377 10.3614C6.6898 10.3236 6.76115 10.3045 6.83711 10.3045H6.83746L9.15895 10.3034C9.24237 10.3034 9.31975 10.3257 9.38897 10.3695C9.40069 10.3769 9.41276 10.384 9.42518 10.3911L13.9659 12.9746C14.1132 13.0584 14.1974 13.2213 14.1803 13.3895C14.1782 13.4125 14.1764 13.4355 14.1761 13.4585L13.8538 27.188C13.8495 27.393 13.7064 27.5329 13.5662 27.581C13.5591 27.5835 13.5517 27.586 13.5446 27.5888L10.9459 28.5522C10.5909 28.684 10.3552 29.0212 10.3545 29.3983L10.3421 35.7614C10.3421 35.995 10.1511 36.1855 9.91503 36.1855L6.07961 36.1905C5.84213 36.1905 5.64868 35.9982 5.64868 35.7614C5.64868 33.9254 5.64655 31.9038 5.64158 29.3987C5.64087 29.0212 5.40517 28.684 5.0502 28.5526L2.41989 27.5771C2.22963 27.5064 2.14337 27.3283 2.1423 27.1827C2.1423 27.1781 2.14195 27.1732 2.14195 27.1686L2.01594 21.7986C2.00422 21.2989 1.58571 20.9037 1.08627 20.915C0.58435 20.9267 0.187141 21.3413 0.198855 21.8407L0.324868 27.205C0.335872 28.1221 0.921924 28.9523 1.78556 29.2729L3.82556 30.0292C3.82947 32.2476 3.83124 34.0823 3.83124 35.7614C3.83124 36.9959 4.84006 38 6.08103 38L9.9161 37.9947C11.1532 37.9947 12.1595 36.9927 12.1595 35.7632L12.1705 30.0292L14.1693 29.2881C15.0496 28.9809 15.6524 28.1528 15.6705 27.2269L15.9924 13.5313C16.0638 12.6671 15.6258 11.8355 14.8679 11.404ZM7.99821 1.80954C9.84901 1.80954 11.3548 3.30877 11.3548 5.15189C11.3548 6.99465 9.84901 8.49389 7.99821 8.49389C6.14705 8.49389 4.64128 6.99465 4.64128 5.15189C4.64128 3.30913 6.14705 1.80954 7.99821 1.80954Z"
                                            fill="#999999"/>
                                        <path
                                            d="M1.022 19.1068C1.52392 19.1068 1.93072 18.7017 1.93072 18.202V18.2013C1.93072 17.7019 1.52392 17.2969 1.022 17.2969C0.520074 17.2969 0.113281 17.7023 0.113281 18.202C0.113281 18.7017 0.520074 19.1068 1.022 19.1068Z"
                                            fill="#111111"/>
                                    </svg>
                                </label>
                                <span>Мужчина</span>
                            </div>
                            <div class="gender-item">
                                <input type="radio" name="gender" value="female">
                                <label for="">
                                    <svg width="16" height="32" viewBox="0 0 16 32" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.9467 21.98L15.7318 21.0913C15.633 20.682 15.2214 20.4308 14.8122 20.5297C14.4032 20.6285 14.1518 21.0404 14.2509 21.4493L14.4657 22.3383C14.5107 22.5237 14.4026 22.7112 14.2202 22.7651C14.2089 22.7684 14.1976 22.7719 14.1863 22.7758L10.4877 24.0565C10.1815 24.1627 9.97583 24.4508 9.97524 24.7749L9.96482 30.1146C9.96482 30.3116 9.8047 30.4717 9.60678 30.4717L6.39128 30.4762C6.25319 30.4762 6.16599 30.4036 6.1264 30.3604C6.08593 30.3164 6.01985 30.2217 6.03146 30.0815C6.03325 30.0598 6.03414 30.0381 6.03414 30.0164L6.02402 24.7749C6.02343 24.4508 5.81777 24.1627 5.51152 24.0565L1.76506 22.7591C1.59304 22.6999 1.49184 22.5157 1.5347 22.3383L4.35079 10.6888C4.37609 10.5852 4.4374 10.5218 4.48472 10.4861L6.81093 8.74889C6.8901 8.68966 6.97105 8.67716 7.02611 8.67716H7.02671L8.97315 8.67627C9.07851 8.67627 9.1547 8.71972 9.19964 8.75633C9.20738 8.76258 9.21541 8.76853 9.22315 8.77449L11.5166 10.484C11.5913 10.54 11.641 10.6212 11.6565 10.7132C11.6595 10.7311 11.663 10.7489 11.6675 10.7665L12.8181 15.5248C12.9169 15.9338 13.3282 16.1853 13.7378 16.0865C14.1467 15.9874 14.3982 15.5757 14.2994 15.1668L13.1541 10.4313C13.0678 9.96289 12.811 9.5489 12.4276 9.26259L10.5374 7.85364C11.6273 7.06465 12.3381 5.78309 12.3381 4.33814C12.3381 1.94585 10.3919 0 7.99993 0C5.60795 0 3.6618 1.94585 3.6618 4.33814C3.6618 5.78339 4.37282 7.06495 5.463 7.85394L3.5737 9.26497C3.22311 9.52687 2.97311 9.90515 2.87013 10.3308L0.0543348 21.9794C-0.176322 22.9273 0.346004 23.8821 1.26803 24.1996L4.50169 25.3196L4.51062 29.9908C4.47758 30.5045 4.65675 31.0131 5.00497 31.3917C5.36032 31.7783 5.86569 32 6.39277 32L9.60827 31.9955C10.6452 31.9955 11.4892 31.1518 11.4892 30.1161L11.4985 25.3193L14.6708 24.2208C15.6211 23.9294 16.1812 22.9493 15.9467 21.98ZM7.99963 1.52353C9.55143 1.52353 10.8139 2.78604 10.8139 4.33814C10.8139 5.88994 9.55143 7.15245 7.99963 7.15245C6.44783 7.15245 5.18532 5.88994 5.18532 4.33814C5.18532 2.78604 6.44783 1.52353 7.99963 1.52353Z"
                                            fill="#999999"/>
                                        <path
                                            d="M14.0656 17.5754C13.6612 17.6909 13.4269 18.1129 13.5424 18.5177C13.6382 18.8522 13.9433 19.0703 14.2748 19.0703C14.3439 19.0703 14.4144 19.0608 14.4844 19.0409C14.8891 18.9251 15.1234 18.5034 15.0076 18.0989V18.0983C14.8918 17.6938 14.4701 17.4599 14.0656 17.5754Z"
                                            fill="#999999"/>
                                    </svg>
                                </label>
                                <span>Женщина</span>
                            </div>
                        </div>
                    </div>
                    <div class="target">
                        <h1>Выберите самую важную для себя цель</h1>
                        <div class="target-group">
                            <div class="item">
                                <input type="radio" name="target" checked value="flexibility">
                                <label for="">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path
                                                d="M12.7344 2.73438C12.7344 1.22664 11.5077 0 10 0C8.49227 0 7.26562 1.22664 7.26562 2.73438C7.26562 4.24211 8.49227 5.46875 10 5.46875C11.5077 5.46875 12.7344 4.24211 12.7344 2.73438ZM10 4.6875C8.92305 4.6875 8.04688 3.81133 8.04688 2.73438C8.04688 1.65742 8.92305 0.78125 10 0.78125C11.077 0.78125 11.9531 1.65742 11.9531 2.73438C11.9531 3.81133 11.077 4.6875 10 4.6875Z"
                                                fill="black"/>
                                            <path
                                                d="M4.60938 10.9375C5.32551 10.9375 6.07782 10.8116 6.71028 10.5928C6.88895 11.5292 7.06934 12.4889 7.17352 13.3936C5.42196 13.4479 4.23032 13.5737 3.34516 13.7958C2.0586 14.1186 1.40625 14.6946 1.40625 15.5078C1.40625 16.4598 2.34617 17.5621 3.92055 18.4567C4.10965 18.5641 4.34746 18.496 4.45313 18.31C4.55973 18.1225 4.49407 17.884 4.30649 17.7775C2.8427 16.9457 2.1875 16.0382 2.1875 15.5078C2.1875 14.4168 5.28457 14.2179 7.61418 14.1632C8.36871 14.5159 9.1843 14.6927 10 14.6927C10.8157 14.6927 11.6313 14.5159 12.3858 14.1632C14.7154 14.2179 17.8125 14.4168 17.8125 15.5078C17.8125 16.8186 15.134 18.1598 13.8537 18.5905C13.7416 18.0616 13.452 17.5864 13.0207 17.2429C12.8963 17.1438 12.7636 17.0588 12.625 16.9866C13.2748 16.7214 13.9027 16.4844 14.6875 16.4844C14.9032 16.4844 15.0781 16.3095 15.0781 16.0938C15.0781 15.878 14.9032 15.7031 14.6875 15.7031C13.6953 15.7031 12.9328 16.0159 12.1954 16.3183C11.7519 16.5002 11.333 16.672 10.8697 16.7764C10.8679 16.7768 10.8661 16.7772 10.8643 16.7776C10.638 16.8318 10.3099 16.875 10 16.875C9.16176 16.875 8.5025 16.6046 7.8045 16.3183C7.06715 16.0159 6.30473 15.7031 5.3125 15.7031C5.09676 15.7031 4.92188 15.878 4.92188 16.0938C4.92188 16.3095 5.09676 16.4844 5.3125 16.4844C6.15075 16.4844 6.81 16.7548 7.50801 17.0411C8.24536 17.3435 9.00778 17.6562 10 17.6562C10.3836 17.6562 10.778 17.6021 11.0623 17.5339C11.5902 17.4128 12.1265 17.5295 12.5339 17.854C12.8432 18.1003 13.0397 18.4351 13.1028 18.8152C12.0906 19.0828 11.0484 19.2188 10 19.2188C9.1566 19.2188 8.30821 19.1296 7.47836 18.9539C7.26723 18.9092 7.06 19.0441 7.01528 19.2551C6.97059 19.4662 7.10547 19.6735 7.31649 19.7182C8.19946 19.9052 9.10231 20 10 20C14.6934 20 18.5938 17.4119 18.5938 15.5078C18.5938 13.5771 14.8878 13.4575 12.8266 13.3936C12.9308 12.4891 13.111 11.53 13.2895 10.594C13.9223 10.8144 14.6639 10.9375 15.3906 10.9375C17.4744 10.9375 19.8887 9.76941 19.9994 7.75582C20.0068 7.62066 19.9438 7.49129 19.8327 7.41391C19.7216 7.33652 19.5785 7.32211 19.4542 7.3759C18.8225 7.6493 17.9606 7.8125 17.1484 7.8125C14.9116 7.8125 13.7521 6.66898 13.6231 6.61305C12.5869 5.87207 11.3286 5.46875 10.0277 5.46875H9.97227C9.56461 5.46875 9.15559 5.50875 8.75657 5.5875C7.66586 5.79023 6.43786 6.48844 6.23965 6.71352C5.23938 7.47051 4.08848 7.8125 2.85157 7.8125C2.03946 7.8125 1.1775 7.6493 0.545785 7.3759C0.421566 7.32215 0.278363 7.33652 0.167308 7.41391C0.0562533 7.49129 -0.00683261 7.62066 0.000589266 7.75582C0.111605 9.77523 2.53485 10.9375 4.60938 10.9375ZM7.96739 13.4658C7.75063 11.4204 7.14836 9.1832 6.94356 7.17043C7.39809 6.86324 7.9052 6.62547 8.4375 6.46945V7.03125C8.4375 7.89281 9.13844 8.59375 10 8.59375C10.8616 8.59375 11.5625 7.89281 11.5625 7.03125V6.46941C12.0945 6.62535 12.6014 6.86305 13.0565 7.17051C12.8546 9.16488 12.25 11.4173 12.0326 13.4657C10.7454 14.0595 9.25469 14.0595 7.96739 13.4658ZM17.1484 8.59375C17.7895 8.59375 18.4622 8.50156 19.057 8.33816C18.5704 9.37137 17.068 10.1562 15.3906 10.1562C14.7153 10.1562 14.0064 10.0311 13.437 9.81617C13.572 9.09578 13.6965 8.38715 13.7836 7.6907C14.6963 8.26148 15.9166 8.59375 17.1484 8.59375ZM10.0277 6.25C10.2795 6.25 10.5318 6.26777 10.7813 6.30223V7.03125C10.7813 7.46203 10.4308 7.8125 10 7.8125C9.56922 7.8125 9.21875 7.46203 9.21875 7.03125V6.30223C9.46821 6.26777 9.72047 6.25 9.97227 6.25H10.0277ZM2.85157 8.59375C4.08364 8.59375 5.30403 8.26137 6.21672 7.69055C6.3052 8.39484 6.432 9.11621 6.56289 9.81578C5.99348 10.031 5.28598 10.1562 4.60938 10.1562C2.93203 10.1562 1.42961 9.37137 0.943011 8.33816C1.53778 8.50156 2.21055 8.59375 2.85157 8.59375Z"
                                                fill="black"/>
                                            <path
                                                d="M5.70312 19.2578C5.91886 19.2578 6.09375 19.0829 6.09375 18.8672C6.09375 18.6515 5.91886 18.4766 5.70312 18.4766C5.48739 18.4766 5.3125 18.6515 5.3125 18.8672C5.3125 19.0829 5.48739 19.2578 5.70312 19.2578Z"
                                                fill="black"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="desc">Гибкость</span>
                                    <span class="target-ellipse"></span>
                                </label>

                            </div>
                            <div class="item">
                                <input type="radio" name="target"  value="BurnАat">
                                <label for="">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path
                                                d="M9.99993 1.29102C7.77282 1.29102 5.96094 3.10289 5.96094 5.32996C5.96094 7.55708 7.77282 9.36895 9.99993 9.36895C12.227 9.36895 14.0389 7.55708 14.0389 5.32996C14.0389 3.10289 12.227 1.29102 9.99993 1.29102ZM7.96076 7.70063L8.12824 7.53311C8.30586 7.35548 8.30586 7.06747 8.12824 6.88985C7.95057 6.71222 7.66256 6.71222 7.48494 6.88985L7.36303 7.01175C7.12956 6.647 6.96936 6.23126 6.90404 5.78482H7.09221C7.34338 5.78482 7.54707 5.58118 7.54707 5.32996C7.54707 5.07874 7.34338 4.8751 7.09221 4.8751H6.90404C6.98064 4.35152 7.18705 3.86955 7.48994 3.46332L7.62217 3.59559C7.711 3.68443 7.8274 3.72882 7.9438 3.72882C8.06019 3.72882 8.17659 3.68443 8.26538 3.59559C8.44305 3.41797 8.44305 3.12996 8.26542 2.95233L8.13315 2.82006C8.53939 2.51717 9.0214 2.31076 9.54498 2.23416V2.42234C9.54498 2.67355 9.74867 2.87719 9.99984 2.87719C10.251 2.87719 10.4547 2.67355 10.4547 2.42234V2.23416C10.9783 2.31076 11.4602 2.51717 11.8665 2.82006L11.7342 2.95233C11.5566 3.12996 11.5566 3.41797 11.7342 3.59564C11.823 3.68447 11.9394 3.72887 12.0558 3.72887C12.1722 3.72887 12.2886 3.68447 12.3775 3.59564L12.5097 3.46337C12.8126 3.8696 13.019 4.35156 13.0956 4.87515H12.9075C12.6563 4.87515 12.4526 5.07879 12.4526 5.33001C12.4526 5.58122 12.6563 5.78486 12.9075 5.78486H13.0956C13.0303 6.2313 12.8701 6.64709 12.6366 7.01184L12.5147 6.88989C12.337 6.71227 12.049 6.71227 11.8714 6.88989C11.6938 7.06751 11.6938 7.35553 11.8714 7.53315L12.0389 7.70067C11.4908 8.17282 10.7783 8.45928 9.99979 8.45928C9.2214 8.45928 8.50891 8.17282 7.96076 7.70063Z"
                                                fill="#111111"/>
                                            <path
                                                d="M16.5184 2.65395H14.6104C13.6568 1.00992 11.9151 0 9.99983 0C8.08452 0 6.34278 1.00992 5.38926 2.65395H3.48118C2.31339 2.65395 1.36328 3.60401 1.36328 4.77185V17.8821C1.36328 19.0499 2.31339 20 3.48118 20H16.5184C17.6862 20 18.6363 19.05 18.6363 17.8821V4.77181C18.6363 3.60401 17.6862 2.65395 16.5184 2.65395ZM17.7266 17.8821C17.7266 18.5483 17.1846 19.0903 16.5184 19.0903H3.48118C2.815 19.0903 2.27299 18.5483 2.27299 17.8821V4.77181C2.27299 4.10563 2.81496 3.56362 3.48118 3.56362H5.65899C5.82961 3.56362 5.98594 3.4681 6.06372 3.31627C6.82484 1.83184 8.33305 0.909713 9.99983 0.909713C11.6666 0.909713 13.1748 1.83184 13.9359 3.31631C14.0137 3.46814 14.17 3.56367 14.3406 3.56367H16.5184C17.1846 3.56367 17.7266 4.10567 17.7266 4.77185V17.8821Z"
                                                fill="#111111"/>
                                            <path
                                                d="M9.99978 3.25977C9.74861 3.25977 9.54492 3.46341 9.54492 3.71462V5.33C9.54492 5.58122 9.74861 5.78486 9.99978 5.78486C10.2509 5.78486 10.4546 5.58122 10.4546 5.33V3.71462C10.4546 3.46341 10.2509 3.25977 9.99978 3.25977Z"
                                                fill="#111111"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="desc">Сжечь жир</span>
                                    <span class="target-ellipse"></span>
                                </label>
                            </div>
                            <div class="item">
                                <input type="radio" name="target" value="muscleSet">
                                <label for="">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path
                                                d="M18.7795 2.19807C17.1521 0.570694 14.5041 0.570694 12.8767 2.19807C12.0884 2.98644 11.6542 4.03459 11.6542 5.14947C11.6542 6.26435 12.0884 7.31251 12.8767 8.10083C13.2814 8.50551 13.7545 8.81655 14.27 9.02372C14.0889 9.27588 13.9038 9.45949 13.7643 9.5623C13.1622 10.0063 12.6287 10.5282 12.1805 11.1056C12.1284 10.7935 12.0404 10.4836 11.9154 10.1807C11.39 8.90797 10.3222 7.99447 8.98557 7.6745L8.4999 7.55825C8.49052 7.51819 8.48113 7.47813 8.47174 7.43753C7.92903 5.08813 5.95764 3.31233 3.56615 3.01865C3.3376 2.99061 3.12917 3.15322 3.10113 3.38197C3.07305 3.61068 3.23571 3.8189 3.46446 3.84699C5.50907 4.0981 7.19458 5.61649 7.65863 7.62539C7.87178 8.54807 8.08697 9.33902 8.29823 9.97628C8.35632 10.1515 8.51931 10.2624 8.69427 10.2624C8.73779 10.2624 8.78207 10.2555 8.82563 10.241C9.04437 10.1685 9.16292 9.93239 9.09039 9.71365C8.9703 9.35141 8.84846 8.9353 8.72607 8.4705L8.79129 8.4861C9.86444 8.74302 10.722 9.47676 11.144 10.4992C11.5567 11.4991 11.4706 12.5958 10.9079 13.5077C10.8907 13.5356 10.8731 13.5633 10.8551 13.5907C10.7288 13.7835 10.7826 14.0421 10.9754 14.1685C11.0459 14.2147 11.1252 14.2368 11.2037 14.2368C11.3397 14.2368 11.473 14.1704 11.5531 14.0482C11.5752 14.0145 11.5968 13.9805 11.618 13.9461C11.847 13.5751 12.0126 13.1798 12.1148 12.7724C12.5988 11.7897 13.3401 10.9122 14.2596 10.234C14.5594 10.013 14.8659 9.66187 15.1128 9.26266C15.3468 9.30284 15.5859 9.32337 15.8281 9.32337C16.1098 9.32337 16.3873 9.29554 16.6574 9.24137C16.3099 10.4931 16.0186 11.5885 15.7899 12.5043C15.2558 14.6422 13.8431 17.3801 12.5911 18.0483C12.3308 18.1873 12.1044 18.2217 11.8995 18.1532C5.8739 15.3911 4.66033 12.5317 4.41823 11.4298C4.37237 11.2211 4.17742 11.0833 3.96978 11.104C2.95989 10.849 2.08824 10.2249 1.51085 9.34194C0.912599 8.42706 0.701666 7.33046 0.917022 6.25417C0.962213 6.02818 0.815707 5.80835 0.58971 5.76312C0.363796 5.71801 0.14385 5.86444 0.0986587 6.09043C-0.159844 7.38262 0.0936096 8.69954 0.812369 9.79869C1.48761 10.8312 2.49942 11.5689 3.67447 11.8893C3.87372 12.58 4.32534 13.5589 5.33732 14.6858C6.73545 16.2427 8.83239 17.6674 11.57 18.9203C11.5806 18.9252 11.5914 18.9295 11.6024 18.9335C11.7684 18.9932 11.9383 19.023 12.1116 19.023C12.3946 19.023 12.6865 18.9434 12.9841 18.7846C13.9052 18.2929 14.69 17.1292 15.1861 16.2394C15.7973 15.1435 16.3125 13.8558 16.5996 12.7066C16.8588 11.6687 17.1993 10.397 17.612 8.92537C18.0401 8.72278 18.4346 8.44571 18.7795 8.10087C20.4069 6.47345 20.4069 3.8255 18.7795 2.19807ZM15.8281 8.48877C14.9362 8.48877 14.0976 8.14143 13.4669 7.51072C12.8362 6.88001 12.4888 6.04145 12.4888 5.14947C12.4888 4.2575 12.8362 3.4189 13.4669 2.78823C14.1179 2.13724 14.973 1.81172 15.8281 1.81172C16.6832 1.81172 17.5384 2.13724 18.1894 2.78819C19.4914 4.09022 19.4914 6.20873 18.1894 7.51072C17.5587 8.14143 16.7201 8.48877 15.8281 8.48877Z"
                                                fill="#111111"/>
                                            <path
                                                d="M15.0551 4.37635C14.6288 4.80264 14.6288 5.49633 15.0551 5.9227C15.2682 6.13585 15.5482 6.24242 15.8282 6.24242C16.1082 6.24242 16.3882 6.13585 16.6014 5.9227C17.0277 5.49637 17.0277 4.80269 16.6014 4.3764C16.1751 3.95006 15.4814 3.95006 15.0551 4.37635ZM16.0113 5.33254C15.9103 5.43344 15.7461 5.43348 15.6452 5.33254C15.5443 5.23161 15.5443 5.06741 15.6452 4.96647C15.6957 4.91602 15.762 4.89077 15.8283 4.89077C15.8945 4.89077 15.9609 4.91598 16.0113 4.96647C16.1122 5.06741 16.1122 5.23161 16.0113 5.33254Z"
                                                fill="#111111"/>
                                            <path
                                                d="M17.9614 3.01644C16.7852 1.84022 14.8714 1.84022 13.6952 3.01644C12.5189 4.19266 12.5189 6.1065 13.6952 7.28272C14.2833 7.87083 15.0558 8.16489 15.8283 8.16489C16.6009 8.16489 17.3733 7.87083 17.9615 7.28272C19.1377 6.1065 19.1377 4.19266 17.9614 3.01644ZM17.3713 6.69261C16.5205 7.54348 15.1361 7.54348 14.2853 6.69261C13.4345 5.84178 13.4345 4.45742 14.2853 3.6066C14.7107 3.18118 15.2695 2.9685 15.8283 2.9685C16.3871 2.9685 16.9459 3.18118 17.3713 3.6066C18.2221 4.45738 18.2221 5.84178 17.3713 6.69261Z"
                                                fill="#111111"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="desc">Набор мышц</span>
                                    <span class="target-ellipse"></span>
                                </label>
                            </div>
                            <div class="item">
                                <input type="radio" name="target" value="keepingInShape">
                                <label for="">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path
                                                d="M19.8387 8.04819L17.095 3.96962C16.8145 3.55275 16.3031 3.37039 15.822 3.51592L14.8783 3.8015C13.4931 2.7105 11.7701 2.11182 10.0002 2.11182C8.23028 2.11182 6.50713 2.71054 5.12192 3.80158L4.17803 3.51592C3.69701 3.37031 3.18548 3.55275 2.90505 3.96962L0.161236 8.04819C-0.0593631 8.37612 -0.053052 8.81151 0.176806 9.13146C0.466039 9.53409 1.08312 10.2907 1.96664 10.8349C2.03394 10.8764 2.10158 10.9153 2.16934 10.9528C2.39409 12.8164 3.27566 14.535 4.66818 15.8129C6.1263 17.1511 8.01989 17.888 10.0001 17.888C11.9802 17.888 13.8736 17.151 15.3317 15.8129C16.7242 14.535 17.6057 12.8164 17.8305 10.9529C17.8983 10.9153 17.966 10.8764 18.0333 10.8349C18.9167 10.2907 19.5339 9.53405 19.8231 9.13146C20.0531 8.81146 20.0593 8.37612 19.8387 8.04819ZM13.9358 4.14164C13.8668 4.21284 13.8237 4.30789 13.819 4.41156L13.7606 5.69629C13.7527 5.87101 13.855 6.03195 14.0166 6.0988L14.8634 6.44915C15.0078 6.50898 15.1737 6.48249 15.2923 6.38072L15.9787 5.79237C16.1985 6.1722 16.3067 6.65189 16.4121 7.11929C16.428 7.18979 16.4438 7.25959 16.4598 7.32872C16.1943 7.26349 15.9619 7.2625 15.7787 7.28475C15.4236 7.32789 15.0807 7.47728 14.7895 7.71233C13.7685 7.32814 13.0035 7.48314 12.5292 7.69319C12.2622 7.8114 12.0578 7.95797 11.9133 8.08411L11.4016 7.78786C11.7502 7.30161 11.9628 6.6293 11.9628 5.87571C11.9628 5.17621 11.7694 4.59064 11.4036 4.18233C11.054 3.79212 10.5556 3.57725 10.0001 3.57725C9.44455 3.57725 8.94614 3.79212 8.59653 4.18233C8.23069 4.59064 8.03733 5.17625 8.03733 5.87571C8.03733 6.62926 8.24992 7.30161 8.59852 7.78786L8.08678 8.08411C7.94229 7.95797 7.73788 7.8114 7.47091 7.69319C6.99645 7.48309 6.23156 7.32814 5.21061 7.71233C4.9193 7.47724 4.57646 7.32789 4.22146 7.28475C4.03814 7.2625 3.80575 7.26349 3.54035 7.32872C3.55638 7.25959 3.57212 7.18975 3.58798 7.11925C3.69336 6.65185 3.80152 6.1722 4.02137 5.79237L4.70779 6.38072C4.82641 6.48245 4.99229 6.50889 5.13674 6.44911L5.98347 6.09875C6.14511 6.03191 6.24742 5.87093 6.23949 5.69625L6.18111 4.41152C6.17642 4.30793 6.13332 4.21293 6.06444 4.14176C7.22182 3.36429 8.5945 2.94223 10.0003 2.94223C11.4059 2.94223 12.7785 3.36425 13.9358 4.14164ZM8.86774 5.87571C8.86774 4.95644 9.29101 4.40766 10.0001 4.40766C10.7091 4.40766 11.1323 4.95648 11.1323 5.87571C11.1323 6.89304 10.6138 7.75256 10.0001 7.75256C9.3863 7.75256 8.86774 6.89304 8.86774 5.87571ZM3.06864 11.3338C3.43688 11.4427 3.81082 11.4974 4.18936 11.4974C4.46988 11.4974 4.75301 11.4667 5.03813 11.4067C5.27509 12.0356 5.79891 13.3459 6.33581 14.1583C6.61255 14.5771 6.79703 15.0398 6.88418 15.5335C6.93977 15.8486 6.98059 16.1461 7.00986 16.3941C6.36529 16.0924 5.7647 15.6921 5.2297 15.2012C4.10433 14.1684 3.35197 12.8143 3.06864 11.3338ZM6.11746 10.4735L6.80002 11.7766C6.8471 11.8664 6.92545 11.9359 7.02024 11.972C7.04304 11.9807 7.58546 12.1853 8.22932 12.2894C8.47799 12.3297 8.70855 12.3497 8.92077 12.3497C9.36051 12.3497 9.72133 12.2635 10 12.0918C10.4131 12.3464 11.0066 12.413 11.7707 12.2894C12.4146 12.1853 12.957 11.9807 12.9798 11.972C13.0746 11.9359 13.1529 11.8664 13.2 11.7766L13.8825 10.4736C14.0437 10.5738 14.2172 10.7204 14.2711 10.8804C14.1194 11.2967 13.5377 12.8437 12.9714 13.7004C12.6316 14.2145 12.4051 14.7827 12.2981 15.3892C12.2003 15.9428 12.1463 16.4375 12.1194 16.733C12.0125 16.7666 11.9049 16.7978 11.7964 16.8262L12.1519 14.7129C12.2186 14.3165 12.0657 13.9136 11.7528 13.6612L10.8591 12.9404C10.3613 12.539 9.63866 12.5389 9.14099 12.9404L8.24722 13.6612C7.93436 13.9136 7.7814 14.3165 7.84812 14.7129L8.20366 16.8262C8.09521 16.7977 7.98755 16.7666 7.88072 16.733C7.85377 16.4374 7.79971 15.9428 7.70201 15.3892C7.59505 14.7828 7.36848 14.2147 7.02867 13.7005C6.46312 12.8447 5.88083 11.2968 5.72899 10.8804C5.78293 10.7202 5.95665 10.5735 6.11746 10.4735ZM9.07435 16.9966L8.66695 14.5751C8.65001 14.4743 8.68887 14.3718 8.76847 14.3076L9.66224 13.5868C9.85789 13.429 10.1419 13.429 10.3377 13.5868L11.2314 14.3076C11.311 14.3717 11.3499 14.4743 11.333 14.5751L10.9256 16.9966C10.6206 17.0367 10.3116 17.0575 10.0001 17.0575C9.68857 17.0576 9.37945 17.0367 9.07435 16.9966ZM14.7703 15.2012C14.2352 15.6922 13.6346 16.0925 12.99 16.3942C13.0193 16.1465 13.0601 15.8492 13.1158 15.5335C13.203 15.0397 13.3875 14.577 13.6642 14.1583C14.2011 13.3459 14.7249 12.0356 14.9619 11.4067C15.247 11.4666 15.5301 11.4973 15.8107 11.4973C16.1892 11.4973 16.5631 11.4426 16.9313 11.3338C16.648 12.8143 15.8956 14.1684 14.7703 15.2012ZM19.1488 8.647C18.6046 9.40454 17.1407 11.0648 15.0458 10.5751C14.8922 10.1628 14.5312 9.88868 14.2689 9.73605L14.4847 9.324C14.5912 9.12083 14.5127 8.86993 14.3096 8.76351C14.1064 8.65709 13.8555 8.73556 13.7491 8.93864L12.5397 11.2476C11.9372 11.4507 10.8594 11.6781 10.4152 11.3717V9.99991C10.4152 9.77059 10.2293 9.5847 10 9.5847C9.77074 9.5847 9.58481 9.77059 9.58481 9.99991V11.3715C9.14161 11.6764 8.06303 11.4496 7.46024 11.2473L6.25086 8.9386C6.14445 8.73548 5.89358 8.65705 5.69038 8.76347C5.48726 8.86988 5.40887 9.12079 5.51524 9.32395L5.73107 9.736C5.46878 9.88863 5.1078 10.1627 4.95422 10.5751C2.85946 11.065 1.39544 9.40455 0.851226 8.64696C0.822826 8.60743 0.822453 8.55304 0.850271 8.51169L3.59404 4.43315C3.66973 4.32063 3.80783 4.27151 3.93746 4.31075L5.36481 4.74273L5.39666 5.44289L5.05469 5.5844L4.22623 4.87427C4.0592 4.73115 3.80945 4.74306 3.65694 4.90151C3.10825 5.47129 2.93278 6.24976 2.77791 6.93656C2.69113 7.32129 2.60921 7.68468 2.47514 7.95282C2.3882 8.12671 2.43354 8.33763 2.5843 8.46045C2.73502 8.58323 2.95076 8.58493 3.10347 8.46468C3.9857 7.76959 4.59896 8.24491 4.8216 8.48154C4.94284 8.6103 5.13217 8.64821 5.29365 8.57592C5.97616 8.27033 6.5834 8.22357 7.09847 8.43695C7.46692 8.58962 7.66281 8.8299 7.68005 8.85174C7.80374 9.02745 8.03633 9.07284 8.2226 8.96505L9.23707 8.37774C9.47058 8.51007 9.72797 8.58298 10 8.58298C10.2721 8.58298 10.5295 8.51007 10.763 8.37774L11.7774 8.96505C11.9614 9.07159 12.1962 9.02189 12.3212 8.84995C12.3286 8.83982 13.0764 7.84611 14.7064 8.57592C14.8678 8.64816 15.0572 8.6103 15.1784 8.48154C15.4011 8.24487 16.0143 7.76963 16.8966 8.46473C17.0493 8.58501 17.265 8.58327 17.4157 8.46049C17.5665 8.33767 17.6118 8.12675 17.5249 7.95286C17.3908 7.68472 17.3089 7.32133 17.2221 6.9366C17.0673 6.24976 16.8917 5.47129 16.343 4.90151C16.1904 4.74306 15.9408 4.73106 15.7738 4.87427L14.9453 5.58435L14.6033 5.44285L14.6352 4.74269L16.0626 4.31071C16.1923 4.27151 16.3303 4.32063 16.406 4.43311L19.1497 8.51169C19.1776 8.55308 19.1772 8.60743 19.1488 8.647Z"
                                                fill="#111111"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="desc">Поддержание формы</span>
                                    <span class="target-ellipse"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="submit-group">
                        <a href="{{route('register.thirdStep')}}" class="next">Продолжить</a>
                        <a href="{{route('register')}}" class="prev">Отмена</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
