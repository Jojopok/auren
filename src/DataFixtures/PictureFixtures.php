<?php

namespace App\DataFixtures;

use App\Entity\Picture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
;

class PictureFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $pictureData = [
            [
                'name' => 'test1',
                'description' => 'test1',
                'url' => 'https://blogger.googleusercontent.com/img/a/AVvXsEiYzb9-i0vGlsURNwOjS6Pbu4gur1U9myU27IZcCau4XEni_JS83F984kT5aLiXTcIQ1n5wMriOaghTRLsFmI6PpoCyS4hz_cPlGhAuhjDSlWDtBIw9Xj46JlkiNPC-mWc9gT7O0DkGzzquAP_hlZiBN82mF3KWOuOSMinJZ1OdkndX96ZytBBmuaPS=s2160
',
                'product' => '1',
            ],
            [
                'name' => 'test1',
                'description' => 'test1',
                'url' => 'https://blogger.googleusercontent.com/img/a/AVvXsEhD3-AsB1movSDLIXcKPJt1m6aIcNIVvURFRv18Cy86MYUnsBhzWSa8jNio00F-0SOSmV8GsE1pgeSd2k8duQARO5-1_qMbZBfBkj1Ov3k6nuRhTplH1bWr418NeH925QNubQiT2CByPK3S0SJXwyWhpaGoaI2jxWIINv0-Yuskw1ttgr5uASn7i7xu=s3429
',
                'product' => '1',
            ],
            [
                'name' => 'test1',
                'description' => 'test1',
                'url' => 'https://1.bp.blogspot.com/-_CGr4Qp81iM/YKJz5z9l8lI/AAAAAAAANh0/OnzzDdSKuR0oo3WXo3UiYtDaGjdd2CMkACLcBGAsYHQ/s2048/image0%2B%25281%2529.jpg
',
                'product' => '1',
            ],
            [
                'name' => 'test1',
                'description' => 'test1',
                'url' => 'https://blogger.googleusercontent.com/img/a/AVvXsEizU5vH7rNwzalaFareS4MSdF1RgCQ8IeJXtVUZeiJw10r2hwcpG2zaQf63RTjDza5A9Vt0lLmnOq3X638Z75sBhLsx_PljLRo_c0lQ-QIrLHLpo5Q1usal_IJ7jwku2Xyl7lItwRx3dm7T4kKc1WyJQz3c14kVvUeM1_R2fbqA5mKReVqbvsBOjdLp=s2160
',
                'product' => '1',
            ],
            [
                'name' => 'test1',
                'description' => 'test1',
                'url' => 'https://blogger.googleusercontent.com/img/a/AVvXsEgNOIhrQMeqDcOrl7ys-LnJXSXaaWm3Q7nd8Cmh4u4rWHoTdjSafAbbi5LBfZ2kfwU58fELc7GQdnx2tQzhrUb8Ozl7PmguCmo7UWg0wXoIiZnl-miH1MAtit8wjURl-kQlaRwK0YXg6cdV4O8DWRN7bGXzPzvAv8CUeBh2nUV9pI4iE3IL6L_H2FTz=s1548
',
                'product' => '1',
            ],
        ];
        foreach ($pictureData as $pictureDataItem) {
            $picture = new Picture();
            $picture->setName($pictureDataItem['name']);
            $picture->setDescription($pictureDataItem['description']);
            $picture->setUrl($pictureDataItem['url']);
            $picture->setProduct($pictureDataItem['product']);
            $manager->persist($picture);
            $manager->flush();
        }
    }
}
