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
class PortNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\Port') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\Port) {
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
        $object = new \DockerPhpClient\Model\Port();
        if (property_exists($data, 'IP')) {
            $object->setIP($data->{'IP'});
        }
        if (property_exists($data, 'PrivatePort')) {
            $object->setPrivatePort($data->{'PrivatePort'});
        }
        if (property_exists($data, 'PublicPort')) {
            $object->setPublicPort($data->{'PublicPort'});
        }
        if (property_exists($data, 'Type')) {
            $object->setType($data->{'Type'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getIP()) {
            $data->{'IP'} = $object->getIP();
        }
        if (null !== $object->getPrivatePort()) {
            $data->{'PrivatePort'} = $object->getPrivatePort();
        }
        if (null !== $object->getPublicPort()) {
            $data->{'PublicPort'} = $object->getPublicPort();
        }
        if (null !== $object->getType()) {
            $data->{'Type'} = $object->getType();
        }
        return $data;
    }
}