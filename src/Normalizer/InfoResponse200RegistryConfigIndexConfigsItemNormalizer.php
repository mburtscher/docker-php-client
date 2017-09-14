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
class InfoResponse200RegistryConfigIndexConfigsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\InfoResponse200RegistryConfigIndexConfigsItem') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\InfoResponse200RegistryConfigIndexConfigsItem) {
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
        $object = new \DockerPhpClient\Model\InfoResponse200RegistryConfigIndexConfigsItem();
        if (property_exists($data, 'Mirrors')) {
            $values = array();
            foreach ($data->{'Mirrors'} as $value) {
                $values[] = $value;
            }
            $object->setMirrors($values);
        }
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'Official')) {
            $object->setOfficial($data->{'Official'});
        }
        if (property_exists($data, 'Secure')) {
            $object->setSecure($data->{'Secure'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getMirrors()) {
            $values = array();
            foreach ($object->getMirrors() as $value) {
                $values[] = $value;
            }
            $data->{'Mirrors'} = $values;
        }
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getOfficial()) {
            $data->{'Official'} = $object->getOfficial();
        }
        if (null !== $object->getSecure()) {
            $data->{'Secure'} = $object->getSecure();
        }
        return $data;
    }
}