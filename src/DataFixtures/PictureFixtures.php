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
            [
                'name' => 'test1',
                'description' => 'test1',
                'url' => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg7PRGL3ifjY7tJAv12bxcxjW9J4Ts6aLxt2q_WSZEah7-ogfnHlHd07dw2C0VCw9zKgw5LPFvLNvhGs7sA2JpOXdzcWjX_1sreBHG14pU7C3xqTvyD-7FgN_W8SJ8RFgdpvI02RIpFBfS786lSQSd1mkjt_mXteheof-FDW_DKfIFyTgHksCkrImps9o4/s881/IMG_20231001_131325_612.jpg
',
                'product' => '2',
            ],
            [
                'name' => 'test1',
                'description' => 'test1',
                'url' => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiwHHRVa5do7Yep9nC8rbj6zJshJAXf0okP6dwlxqR7sXydFb3tbfotIalPKrsXhtmglGWZTHJSPaabyQymLznExjqJoxRf6krmy7vzGszaF_MZ-GqpRGKCkuGByZJCYH8af44mdMOe4u5J8FxLVdxRYFJf0kn5yg25CWCKIaeJ07VHxrcG6tdJRdWhKP4/s1631/IMG_20231010_152322.jpg
',
                'product' => '2',
            ],
            [
                'name' => 'test1',
                'description' => 'test1',
                'url' => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjmIIFSjcsYi9BOtDK36g6efEmbSPyzElRW6xTE43jhj90F_TTRq-IYXpG-WThYVq4APRmAzS9fsV_iJm-e96kz4h2IBYo2xxPpUZt_Q6exdoQpvXG28ntHZpltXW2N7NxFuHzF7YoVn8eiD6o9P1T0U6S8HIQAhxFCuTTaZ9VL7ed2atbEluKax739Rnc/s897/IMG_20231011_130641.jpg
',
                'product' => '2',
            ],            [
                'name' => 'test1',
                'description' => 'test1',
                'url' => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhfGY_5Lp8pDHVvfLwXm-HgstemE4Cq5Ad1NgVE4hAN92ISml9AJALu5GeTdLdckoGAL06rlBF1-KPX7k4fF_vm6iSj0CUOxS_irYBhWAQBy6mNgg-iE3lovDeoxikywve3Ohq_qqPiey5iffsGiusZdDthzu1Q9thTerJeopx5r1A0nUea4jTd4vIzgIs/s2084/Banniere_event_facebook_BQ.png
',
                'product' => '3',
            ],
            [
                'name' => 'test1',
                'description' => 'test1',
                'url' => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjtrJQzTNmzYbOqeICc98EQVH-uZx7wxFkq3YSyIh9OJhoPDRrZccLcNnTxXTFechxGYgoyt10JvpI6UmKmC-RzuS_lZHGsEYLJtCx4Y7t5ZXETXEVx-LKNx2xNd4Z7oSehBcDuuwO4hOkNWK_LybU5Za8nHvLNYsLWoySj7J7MaWE6xKHWk5OLb2WPtrM/s2084/Banniere_event_facebook_BLINDTEST.png
',
                'product' => '3',
            ],[
                'name' => 'test1',
                'description' => 'test1',
                'url' => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjF1pJpRJV_4Z28xiGbN_R88j4Si0SwMX_H5li5uCfXjGT-gYabjXcdhCWDCNeVs-Rulc2e8ZO3Sdu3fq5EiXpuAJUL3IrZiw5_G0hkJijSMSkUllNiH2Wx39yesQB4ODVayp_DLsAaw6Av4cZ6EHKcsb3qATlk4crlInpQCtJR7BpYbHMXbd4RaVL1NnM/s2034/darts-jadore-logo.jpg
',
                'product' => '3',
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
