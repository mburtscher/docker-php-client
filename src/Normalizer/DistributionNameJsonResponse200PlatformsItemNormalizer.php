<?php

namespace DockerPhpClient\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DistributionNameJsonResponse200PlatformsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\DistributionNameJsonResponse200PlatformsItem') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\DistributionNameJsonResponse200PlatformsItem) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \DockerPhpClient\Model\DistributionNameJsonResponse200PlatformsItem();
        if (property_exists($data, 'Architecture')) {
            $object->setArchitecture($data->{'Architecture'});
        }
        if (property_exists($data, 'OS')) {
            $object->setOS($data->{'OS'});
        }
        if (property_exists($data, 'OSVersion')) {
            $object->setOSVersion($data->{'OSVersion'});
        }
        if (property_exists($data, 'OSFeatures')) {
            $values = array();
            foreach ($data->{'OSFeatures'} as $value) {
                $values[] = $value;
            }
            $object->setOSFeatures($values);
        }
        if (property_exists($data, 'Variant')) {
            $object->setVariant($data->{'Variant'});
        }
        if (property_exists($data, 'Features')) {
            $values_1 = array();
            foreach ($data->{'Features'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setFeatures($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getArchitecture()) {
            $data->{'Architecture'} = $object->getArchitecture();
        }
        if (null !== $object->getOS()) {
            $data->{'OS'} = $object->getOS();
        }
        if (null !== $object->getOSVersion()) {
            $data->{'OSVersion'} = $object->getOSVersion();
        }
        if (null !== $object->getOSFeatures()) {
            $values = array();
            foreach ($object->getOSFeatures() as $value) {
                $values[] = $value;
            }
            $data->{'OSFeatures'} = $values;
        }
        if (null !== $object->getVariant()) {
            $data->{'Variant'} = $object->getVariant();
        }
        if (null !== $object->getFeatures()) {
            $values_1 = array();
            foreach ($object->getFeatures() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'Features'} = $values_1;
        }
        return $data;
    }
}