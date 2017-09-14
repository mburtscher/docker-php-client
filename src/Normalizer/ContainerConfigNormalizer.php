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
class ContainerConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\ContainerConfig') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\ContainerConfig) {
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
        $object = new \DockerPhpClient\Model\ContainerConfig();
        if (property_exists($data, 'Hostname')) {
            $object->setHostname($data->{'Hostname'});
        }
        if (property_exists($data, 'Domainname')) {
            $object->setDomainname($data->{'Domainname'});
        }
        if (property_exists($data, 'User')) {
            $object->setUser($data->{'User'});
        }
        if (property_exists($data, 'AttachStdin')) {
            $object->setAttachStdin($data->{'AttachStdin'});
        }
        if (property_exists($data, 'AttachStdout')) {
            $object->setAttachStdout($data->{'AttachStdout'});
        }
        if (property_exists($data, 'AttachStderr')) {
            $object->setAttachStderr($data->{'AttachStderr'});
        }
        if (property_exists($data, 'ExposedPorts')) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'ExposedPorts'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setExposedPorts($values);
        }
        if (property_exists($data, 'Tty')) {
            $object->setTty($data->{'Tty'});
        }
        if (property_exists($data, 'OpenStdin')) {
            $object->setOpenStdin($data->{'OpenStdin'});
        }
        if (property_exists($data, 'StdinOnce')) {
            $object->setStdinOnce($data->{'StdinOnce'});
        }
        if (property_exists($data, 'Env')) {
            $values_1 = array();
            foreach ($data->{'Env'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setEnv($values_1);
        }
        if (property_exists($data, 'Cmd')) {
            $value_2 = $data->{'Cmd'};
            if (is_array($data->{'Cmd'})) {
                $values_2 = array();
                foreach ($data->{'Cmd'} as $value_3) {
                    $values_2[] = $value_3;
                }
                $value_2 = $values_2;
            }
            if (is_string($data->{'Cmd'})) {
                $value_2 = $data->{'Cmd'};
            }
            $object->setCmd($value_2);
        }
        if (property_exists($data, 'Healthcheck')) {
            $object->setHealthcheck($this->denormalizer->denormalize($data->{'Healthcheck'}, 'DockerPhpClient\\Model\\HealthConfig', 'json', $context));
        }
        if (property_exists($data, 'ArgsEscaped')) {
            $object->setArgsEscaped($data->{'ArgsEscaped'});
        }
        if (property_exists($data, 'Image')) {
            $object->setImage($data->{'Image'});
        }
        if (property_exists($data, 'Volumes')) {
            $object->setVolumes($this->denormalizer->denormalize($data->{'Volumes'}, 'DockerPhpClient\\Model\\ContainerConfigVolumes', 'json', $context));
        }
        if (property_exists($data, 'WorkingDir')) {
            $object->setWorkingDir($data->{'WorkingDir'});
        }
        if (property_exists($data, 'Entrypoint')) {
            $value_4 = $data->{'Entrypoint'};
            if (is_array($data->{'Entrypoint'})) {
                $values_3 = array();
                foreach ($data->{'Entrypoint'} as $value_5) {
                    $values_3[] = $value_5;
                }
                $value_4 = $values_3;
            }
            if (is_string($data->{'Entrypoint'})) {
                $value_4 = $data->{'Entrypoint'};
            }
            $object->setEntrypoint($value_4);
        }
        if (property_exists($data, 'NetworkDisabled')) {
            $object->setNetworkDisabled($data->{'NetworkDisabled'});
        }
        if (property_exists($data, 'MacAddress')) {
            $object->setMacAddress($data->{'MacAddress'});
        }
        if (property_exists($data, 'OnBuild')) {
            $values_4 = array();
            foreach ($data->{'OnBuild'} as $value_6) {
                $values_4[] = $value_6;
            }
            $object->setOnBuild($values_4);
        }
        if (property_exists($data, 'Labels')) {
            $values_5 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Labels'} as $key_1 => $value_7) {
                $values_5[$key_1] = $value_7;
            }
            $object->setLabels($values_5);
        }
        if (property_exists($data, 'StopSignal')) {
            $object->setStopSignal($data->{'StopSignal'});
        }
        if (property_exists($data, 'StopTimeout')) {
            $object->setStopTimeout($data->{'StopTimeout'});
        }
        if (property_exists($data, 'Shell')) {
            $values_6 = array();
            foreach ($data->{'Shell'} as $value_8) {
                $values_6[] = $value_8;
            }
            $object->setShell($values_6);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getHostname()) {
            $data->{'Hostname'} = $object->getHostname();
        }
        if (null !== $object->getDomainname()) {
            $data->{'Domainname'} = $object->getDomainname();
        }
        if (null !== $object->getUser()) {
            $data->{'User'} = $object->getUser();
        }
        if (null !== $object->getAttachStdin()) {
            $data->{'AttachStdin'} = $object->getAttachStdin();
        }
        if (null !== $object->getAttachStdout()) {
            $data->{'AttachStdout'} = $object->getAttachStdout();
        }
        if (null !== $object->getAttachStderr()) {
            $data->{'AttachStderr'} = $object->getAttachStderr();
        }
        if (null !== $object->getExposedPorts()) {
            $values = new \stdClass();
            foreach ($object->getExposedPorts() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'ExposedPorts'} = $values;
        }
        if (null !== $object->getTty()) {
            $data->{'Tty'} = $object->getTty();
        }
        if (null !== $object->getOpenStdin()) {
            $data->{'OpenStdin'} = $object->getOpenStdin();
        }
        if (null !== $object->getStdinOnce()) {
            $data->{'StdinOnce'} = $object->getStdinOnce();
        }
        if (null !== $object->getEnv()) {
            $values_1 = array();
            foreach ($object->getEnv() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'Env'} = $values_1;
        }
        if (null !== $object->getCmd()) {
            $value_2 = $object->getCmd();
            if (is_array($object->getCmd())) {
                $values_2 = array();
                foreach ($object->getCmd() as $value_3) {
                    $values_2[] = $value_3;
                }
                $value_2 = $values_2;
            }
            if (is_string($object->getCmd())) {
                $value_2 = $object->getCmd();
            }
            $data->{'Cmd'} = $value_2;
        }
        if (null !== $object->getHealthcheck()) {
            $data->{'Healthcheck'} = $this->normalizer->normalize($object->getHealthcheck(), 'json', $context);
        }
        if (null !== $object->getArgsEscaped()) {
            $data->{'ArgsEscaped'} = $object->getArgsEscaped();
        }
        if (null !== $object->getImage()) {
            $data->{'Image'} = $object->getImage();
        }
        if (null !== $object->getVolumes()) {
            $data->{'Volumes'} = $this->normalizer->normalize($object->getVolumes(), 'json', $context);
        }
        if (null !== $object->getWorkingDir()) {
            $data->{'WorkingDir'} = $object->getWorkingDir();
        }
        if (null !== $object->getEntrypoint()) {
            $value_4 = $object->getEntrypoint();
            if (is_array($object->getEntrypoint())) {
                $values_3 = array();
                foreach ($object->getEntrypoint() as $value_5) {
                    $values_3[] = $value_5;
                }
                $value_4 = $values_3;
            }
            if (is_string($object->getEntrypoint())) {
                $value_4 = $object->getEntrypoint();
            }
            $data->{'Entrypoint'} = $value_4;
        }
        if (null !== $object->getNetworkDisabled()) {
            $data->{'NetworkDisabled'} = $object->getNetworkDisabled();
        }
        if (null !== $object->getMacAddress()) {
            $data->{'MacAddress'} = $object->getMacAddress();
        }
        if (null !== $object->getOnBuild()) {
            $values_4 = array();
            foreach ($object->getOnBuild() as $value_6) {
                $values_4[] = $value_6;
            }
            $data->{'OnBuild'} = $values_4;
        }
        if (null !== $object->getLabels()) {
            $values_5 = new \stdClass();
            foreach ($object->getLabels() as $key_1 => $value_7) {
                $values_5->{$key_1} = $value_7;
            }
            $data->{'Labels'} = $values_5;
        }
        if (null !== $object->getStopSignal()) {
            $data->{'StopSignal'} = $object->getStopSignal();
        }
        if (null !== $object->getStopTimeout()) {
            $data->{'StopTimeout'} = $object->getStopTimeout();
        }
        if (null !== $object->getShell()) {
            $values_6 = array();
            foreach ($object->getShell() as $value_8) {
                $values_6[] = $value_8;
            }
            $data->{'Shell'} = $values_6;
        }
        return $data;
    }
}