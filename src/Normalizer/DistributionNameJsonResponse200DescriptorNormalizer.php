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
class DistributionNameJsonResponse200DescriptorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\DistributionNameJsonResponse200Descriptor') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\DistributionNameJsonResponse200Descriptor) {
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
        $object = new \DockerPhpClient\Model\DistributionNameJsonResponse200Descriptor();
        if (property_exists($data, 'MediaType')) {
            $object->setMediaType($data->{'MediaType'});
        }
        if (property_exists($data, 'Size')) {
            $object->setSize($data->{'Size'});
        }
        if (property_exists($data, 'Digest')) {
            $object->setDigest($data->{'Digest'});
        }
        if (property_exists($data, 'URLs')) {
            $values = array();
            foreach ($data->{'URLs'} as $value) {
                $values[] = $value;
            }
            $object->setURLs($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getMediaType()) {
            $data->{'MediaType'} = $object->getMediaType();
        }
        if (null !== $object->getSize()) {
            $data->{'Size'} = $object->getSize();
        }
        if (null !== $object->getDigest()) {
            $data->{'Digest'} = $object->getDigest();
        }
        if (null !== $object->getURLs()) {
            $values = array();
            foreach ($object->getURLs() as $value) {
                $values[] = $value;
            }
            $data->{'URLs'} = $values;
        }
        return $data;
    }
}