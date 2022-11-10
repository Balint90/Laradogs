<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Breed>
 */
class BreedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $breeds = ['Afgán agár', 'Airedale terrier', 'Akita inu', 'Amerikai eszkimó kutya', 'Amerikai meztelen terrier', 'Amerikai pitbull terrier', 'Amerikai staffordshire terrier', 'Angol agár', 'Angol bulldog', 'Angol cockerspániel', 'Angol masztiff', 'Angol pointer', 'Basset hound', 'Beagle', 'Berni pásztorkutya', 'Bichon havanese', 'Bobtail', 'Border collie', 'Boston terrier', 'Brüsszeli griffon', 'Bullterrier', 'Chow-chow', 'Csivava (hosszú szőrű)', 'Csivava (rövid szőrű)', 'Dalmata', 'Dobermann', 'Drótszőrű foxterrier', 'Francia bulldog', 'Golden retriever', 'Gordon szetter', 'Ír szetter', 'Jack Russel-terrier', 'Kaukázusi juhászkutya', 'Kínai kopaszkutya', 'Kis olasz agár', 'Komondor', 'Közép schnauzer', 'Közép uszkár', 'Kuvasz', 'Labrador retriever', 'Leonbergi', 'Magyar vizsla', 'Máltai selyemkutya', 'Mopsz', 'Mudi', 'Német boxer', 'Német dog', 'Német juhászkutya', 'Német kis spitz', 'Német közép spitz', 'Norwich terrier', 'Óriás uszkár', 'Pekingi palotakutya', 'Pembroke welsh corgi', 'Pireneusi hegyikutya', 'Puli', 'Pumi', 'Rottweiler', 'Shetlandi juhászkutya', 'Si-cu', 'Skót juhászkutya', 'Springer spániel', 'Szent-bernáthegyi kutya', 'Törpepincser', 'Törpetacskó (hosszú szőrű)', 'Törpetacskó (rövid szőrű)', 'Törpeuszkár', 'Újfundlandi juhászkutya', 'Welsh terrier', 'West highland white terrier', 'Yorkshire terrier'];
        $breed_group_names = ['Sport', 'Vadász', 'Munka', 'Terrier', 'Játék', 'Nem-Sport', 'Pásztor'];
        $temperaments = [
            'Sport' => 'Lelkes, hűséges, társaságkedvelő, szerető, aktív, képzett',
            'Vadász' => 'Szerető, sportos, gyengéd, intelligens, csendes, kiegyensúlyozott',
            'Munka' => 'Barátságos, szeretetteljes, odaadó, hűséges, méltóságteljes, játékos',
            'Terrier' => 'Kimenő, barátságos, éber, magabiztos, intelligens, bátor',
            'Játék' => 'Makacs, kíváncsi, játékos, kalandvágyó, aktív, vidám',
            'Nem-Sport' => 'Játékos, hűséges, független, intelligens, boldog, énekes',
            'Pásztor' => 'Energikus, érdeklődő, független, gyengéd, intelligens, szerető'
        ];
        $pictures = [null, "https://cdn2.thedogapi.com/images/Syd4xxqEm_1280.jpg", "https://cdn2.thedogapi.com/images/r1f_ll5VX_1280.jpg", "https://cdn2.thedogapi.com/images/SkIgzxqNQ_1280.jpg", "https://cdn2.thedogapi.com/images/B1Edfl9NX_1280.jpg", "https://cdn2.thedogapi.com/images/B12uzg9V7_1280.png", "https://cdn2.thedogapi.com/images/SJAnzg9NX_1280.jpg", "https://cdn2.thedogapi.com/images/SJIUQl9NX_1280.jpg", "https://cdn2.thedogapi.com/images/HJd0XecNX_1280.jpg", "https://cdn2.thedogapi.com/images/Hkxk4ecVX_1280.jpg", "https://cdn2.thedogapi.com/images/HJMzEl5N7_1280.jpg", "https://cdn2.thedogapi.com/images/HkP7Vxc4Q_1280.jpg", "https://cdn2.thedogapi.com/images/B1fG6PT4Q.gif", "https://cdn2.thedogapi.com/images/H1iHQpaVX.gif", "https://cdn2.thedogapi.com/images/r12d7apV7.gif", "https://cdn2.thedogapi.com/images/SkatQTaEQ.gif", "https://cdn2.thedogapi.com/images/rkq57TpVm.gif", "https://cdn2.thedogapi.com/images/S1FXVTpV7.gif", "https://cdn2.thedogapi.com/images/Bkf4Ea6NX.gif", "https://cdn2.thedogapi.com/images/BJ2Wq664X.gif", "https://cdn2.thedogapi.com/images/HJy3uOnrm_1280.jpg", "https://cdn2.thedogapi.com/images/Hk53_dnSQ_1280.jpg", "https://cdn2.thedogapi.com/images/B13NtuhSm_1280.jpg", "https://cdn2.thedogapi.com/images/h23HQAljB_1280.jpg", "https://cdn2.thedogapi.com/images/zEQtlI8h1.jpg", "https://cdn2.thedogapi.com/images/BIZiWPLqX.jpg", "https://cdn2.thedogapi.com/images/r9CSG0CWk.jpg", "https://cdn2.thedogapi.com/images/UDciB__0I.jpg", "https://cdn2.thedogapi.com/images/aG5NsYZvQ.jpg", "https://cdn2.thedogapi.com/images/_gn8GLrE6.jpg", "https://cdn2.thedogapi.com/images/ikfu-FNqJ.jpg", "https://cdn2.thedogapi.com/images/ttTgbx8Fu.jpg", "https://cdn2.thedogapi.com/images/VTbymwKqG.jpg", "https://cdn2.thedogapi.com/images/PG8UPLSVU.jpg", "https://cdn2.thedogapi.com/images/MUGiNcu_Z.jpg", "https://cdn2.thedogapi.com/images/uEPB98jBS.jpg", "https://cdn2.thedogapi.com/images/nTmwV3lbd.jpg", "https://cdn2.thedogapi.com/images/BoBa74iFn.jpg", "https://cdn2.thedogapi.com/images/WinSPF9rK.jpg", "https://cdn2.thedogapi.com/images/bRq0anD4j.jpg", "https://cdn2.thedogapi.com/images/0OZkPtVZe.jpg", "https://cdn2.thedogapi.com/images/TMHL6fN5I.jpg", "https://cdn2.thedogapi.com/images/_YgQ8eUX4.jpg", "https://cdn2.thedogapi.com/images/x-LJYrq37.jpg", "https://cdn2.thedogapi.com/images/g8KDO0Yvd.jpg", "https://cdn2.thedogapi.com/images/Lx1N_UKFS.jpg", "https://cdn2.thedogapi.com/images/J48gxM23-.jpg", "https://cdn2.thedogapi.com/images/d_dNvBD0R.jpg", "https://cdn2.thedogapi.com/images/ena5znPUB.jpg", "https://cdn2.thedogapi.com/images/A09F4c1qP.jpg", "https://cdn2.thedogapi.com/images/e9y7-VkOl.jpg", "https://cdn2.thedogapi.com/images/iFf6heV3L.jpg", "https://cdn2.thedogapi.com/images/93bGwN0KL.jpg", "https://cdn2.thedogapi.com/images/MnFVJ4XuT.jpg", "https://cdn2.thedogapi.com/images/ViIxw1j4w.jpg", "https://cdn2.thedogapi.com/images/S82sy7Hfz.jpg", "https://cdn2.thedogapi.com/images/6Dj7tp_vB.jpg", "https://cdn2.thedogapi.com/images/-GnlzQbmR.jpg", "https://cdn2.thedogapi.com/images/WSHowxXDo.jpg", "https://cdn2.thedogapi.com/images/aJ6N5Kf-l.jpg", "https://cdn2.thedogapi.com/images/zGnoHL8B8.jpg", "https://cdn2.thedogapi.com/images/fbl5hbwrc.jpg", "https://cdn2.thedogapi.com/images/R9ZzdMEnl.jpg", "https://cdn2.thedogapi.com/images/J5xkGtEU3.jpg", "https://cdn2.thedogapi.com/images/hS_-gIE3G.jpg", "https://cdn2.thedogapi.com/images/CVbVUx8pJ.jpg", "https://cdn2.thedogapi.com/images/0etOz_CUv.jpg", "https://cdn2.thedogapi.com/images/uHgHH6y4h.jpg", "https://cdn2.thedogapi.com/images/KRxg5MIJJ.jpg", "https://cdn2.thedogapi.com/images/L4ED868m_.jpg", "https://cdn2.thedogapi.com/images/SLDsIjTd-.jpg", "https://cdn2.thedogapi.com/images/YQX57Kz3X.jpg", "https://cdn2.thedogapi.com/images/DArkgQw59.jpg", "https://cdn2.thedogapi.com/images/TGB2APNbS.jpg", "https://cdn2.thedogapi.com/images/12GTwG4Bj.jpg", "https://cdn2.thedogapi.com/images/bEQBV6y9Q.jpg", "https://cdn2.thedogapi.com/images/Mncs8eeby.jpg", "https://cdn2.thedogapi.com/images/fHVBn5VTk.jpg", "https://cdn2.thedogapi.com/images/tYnqlqNkz.jpg", "https://cdn2.thedogapi.com/images/PQxzcr48n.jpg", "https://cdn2.thedogapi.com/images/MCQEc8Oc-.jpg", "https://cdn2.thedogapi.com/images/YavuF9onG.jpg", "https://cdn2.thedogapi.com/images/-qOqBA-Un.jpg", "https://cdn2.thedogapi.com/images/FXkloOzpH.jpg", "https://cdn2.thedogapi.com/images/TXXuNa4by.jpg", "https://cdn2.thedogapi.com/images/ILIbreEou.jpg", "https://cdn2.thedogapi.com/images/xmDc7XZhm.jpg", "https://cdn2.thedogapi.com/images/BJPRRVjpu.png", "https://cdn2.thedogapi.com/images/03hK_0-pV.jpg", "https://cdn2.thedogapi.com/images/wXi4G5qEG.png", "https://cdn2.thedogapi.com/images/haqKyerdi.jpg", "https://cdn2.thedogapi.com/images/Rvw54JUMt.jpg", "https://cdn2.thedogapi.com/images/rD-e5QM70.jpg", "https://cdn2.thedogapi.com/images/8MS6ne7uu.jpg", "https://cdn2.thedogapi.com/images/9I-nz55bf.png", "https://cdn2.thedogapi.com/images/iSNGgrrzi.jpg", "https://cdn2.thedogapi.com/images/awSN72EWf.png", "https://cdn2.thedogapi.com/images/3b3LBTI1S.jpg", "https://cdn2.thedogapi.com/images/AwKd_0wL4.jpg", "https://cdn2.thedogapi.com/images/3pfFXtxZN.jpg", "https://cdn2.thedogapi.com/images/COXQowStQ.jpg"];

        $breed_group_name = $this->faker->randomElement($breed_group_names);

        return [
            'breed_name' => $this->faker->unique()->randomElement($breeds),
            'breed_group_name' => $breed_group_name,
            'lifespan' => $this->faker->numberBetween(10, 12) . '-' . $this->faker->numberBetween(14, 16),
            'temperament' => $temperaments[$breed_group_name],
            'weight_interval' => $this->faker->numberBetween(10, 20) . '-' . $this->faker->numberBetween(40, 50) . ' kg',
            'height_interval' => $this->faker->numberBetween(20, 25) . '-' . $this->faker->numberBetween(30, 50) . ' cm',
            'picture' => $this->faker->randomElement($pictures)
        ];
    }
}
